<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class arsitekController extends Controller
{
    public function index(Request $request)
    {
      if($request->has('cari')){
        $data_arsitek = \App\arsitek::where('nama_depan','LIKE','%'.$request->cari.'%')->get();
      }else{
        $data_arsitek = \App\arsitek::all();
      }
      return view('arsitek.index',['data_arsitek' => $data_arsitek]);
    }

    public function create(Request $request)
    {
      // dd($request->all());
      $this->validate($request,[
        'nik' => 'required|min:16',
        'nama_depan' => 'required|min:3',
        'nama_belakang' => 'required',
        'email' => 'required|email|unique:users',
        'jenis_kelamin' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required|min:11',
        'ktp' => 'mimes:jpg,png,jpeg'
      ]);
      //insert ke tabel user
      $user = new \App\User;
      $user->role = 'arsitek';
      $user->name = $request->nama_depan;
      $user->email= $request->email;
      $user->password = bcrypt('rahasia');
      $user->remember_token = Str::random(60);
      $user->save();
      //insert ke tabel arsitek
      $request->request->add(['user_id' => $user->id]);
      $arsitek = \App\arsitek::create($request->all());
      if($request->hasFile('ktp')){
        $request->file('ktp')->move('ktp/',$request->file('ktp')->getClientOriginalName());
        $arsitek->ktp=$request->file('ktp')->getClientOriginalName();
        $arsitek->save();
      }
      return redirect('/arsitek')->with('sukses','Data Berhasil diinput');
    }

    public function edit($id)
    {
      $arsitek = \App\arsitek::find($id);
      return view('arsitek/edit',['arsitek'=>$arsitek]);
    }

    public function update(Request $request,$id)
    {
      // dd($request->all());
      $arsitek = \App\arsitek::find($id);
      $arsitek->update($request->all());
      if($request->hasFile('avatar')){
        $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
        $arsitek->avatar=$request->file('avatar')->getClientOriginalName();
        $arsitek->save();
      }
      if(auth()->user()->role == 'admin'){
        return redirect('/arsitek')->with('sukses','Data Berhasil diupdate');
      }
        return redirect('/profilku')->with('sukses','Data Berhasil diupdate');
    }

    public function delete($id)
    {
      $arsitek = \App\arsitek::find($id);
      $arsitek->delete();
      return redirect('/arsitek')->with('sukses','Data Berhasil dihapus');
    }

    public function Profile($id)
    {
      $arsitek = \App\arsitek::find($id);
      return view('arsitek.profile',['arsitek'=>$arsitek]);
    }

    public function ktp($id)
    {
      $arsitek = \App\arsitek::find($id);
      return view('arsitek.ktp',['arsitek'=>$arsitek]);
    }

    public function profilku()
    {
      return view('arsitek.profilsaya');
    }
}
