@extends('layouts.master')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="main">
      <div class="main-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="panel">
    								<div class="panel-heading">
    									<h3 class="panel-title">Ubah Data</h3>
    								</div>
    								<div class="panel-body">
                      <form action="/arsitek/{{$arsitek->id}}/update" method="POST" enctype="multipart/form-data">
                          {{csrf_field()}}
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Depan</label>
                            <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$arsitek->nama_depan}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Belakang</label>
                            <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$arsitek->nama_belakang}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                            <input name="tanggal_lahir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$arsitek->tanggal_lahir}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                              <option value="Pria" @if($arsitek->jenis_kelamin == 'Pria') selected @endif>Pria</option>
                              <option value="Wanita" @if($arsitek->jenis_kelamin == 'Wanita') selected @endif>Wanita</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$arsitek->alamat}}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">No Hp</label>
                            <input name="no_hp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$arsitek->no_hp}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Photo Avatar</label>
                            <input type="file" name="avatar" class="form-control">
                          </div>
                          <button type="submit" class="btn btn-warning">Update</button>
                          @if(auth()->user()->role == 'admin')
                          <a href="/arsitek/{{$arsitek->id}}/profile" class="btn btn-primary">Kembali</a>
                          @elseif(auth()->user()->role == 'arsitek')
                          <a href="/profilku" class="btn btn-primary">Kembali</a>
                          @endif
                          </form>
    								</div>
    							</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>






@stop
@section('content1')
      <h1>Edit Data arsitek</h1>
      @if(session('sukses'))
        <div class="alert alert-success" role="alert">
          {{session('sukses')}}
        </div>
      @endif
      <div class="row">
        <div class="col-lg-12">
        <form action="/arsitek/{{$arsitek->id}}/update" method="POST">
            {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Depan</label>
              <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$arsitek->nama_depan}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Belakang</label>
              <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$arsitek->nama_belakang}}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                <option value="Pria" @if($arsitek->jenis_kelamin == 'Pria') selected @endif>Pria</option>
                <option value="Wanita" @if($arsitek->jenis_kelamin == 'Wanita') selected @endif>Wanita</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Alamat</label>
              <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$arsitek->alamat}}</textarea>
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
            </form>
            </div>
      </div>
@endsection
