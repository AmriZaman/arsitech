<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class pelangganController extends Controller
{
  public function index(Request $request)
  {
    if($request->has('cari')){
      $data_pelanggan = \App\pelanggan::where('nama_depan','LIKE','%'.$request->cari.'%')->get();
    }else{
      $data_pelanggan = \App\pelanggan::all();
    }
    return view('pelanggan.index',['data_pelanggan' => $data_pelanggan]);
  }

  public function create(Request $request)
  {
    //insert ke tabel user
    $user = new \App\User;
    $user->role = 'pelanggan';
    $user->name = $request->nama_depan;
    $user->email= $request->email;
    $user->password = bcrypt('rahasia');
    $user->remember_token = Str::random(60);
    $user->save();
    //insert ke tabel pelanggan
    $request->request->add(['user_id' => $user->id]);
    $pelanggan = \App\pelanggan::create($request->all());
    return redirect('/pelanggan')->with('sukses','Data Berhasil diinput');
  }

  public function edit($id)
  {
    $user = \App\User::find($id);
    $pelanggan = \App\pelanggan::find($id);
    return view('pelanggan/edit',['pelanggan'=>$pelanggan],['user'=>$user]);
  }

  public function update(Request $request,$id)
  {
    // dd($request->all());
    $pelanggan = \App\pelanggan::find($id);
    $pelanggan->update($request->all());
    if($request->hasFile('avatar')){
      $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
      $pelanggan->avatar=$request->file('avatar')->getClientOriginalName();
      $pelanggan->save();
    }
    if(auth()->user()->role == 'admin'){
      return redirect('/pelanggan')->with('sukses','Data Berhasil diupdate');
    }
    return redirect('/profilsaya')->with('sukses','Data Berhasil diupdate');
  }

  public function delete($id)
  {
    $pelanggan = \App\pelanggan::find($id);
    $pelanggan->delete();
    return redirect('/pelanggan')->with('sukses','Data Berhasil dihapus');
  }

  public function Profile($id)
  {
    $pelanggan = \App\pelanggan::find($id);
    return view('pelanggan.profile',['pelanggan'=>$pelanggan]);
  }

  public function profilsaya()
  {
    return view('pelanggan.profilsaya');
  }
}
