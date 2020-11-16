@extends('layouts.master')

@section('content')
  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel panel-headline">
								<div class="panel-heading">
									<h3 class="panel-title">Data arsitek</h3>
                  <!-- <p class="panel-subtitle">Catatan: Jika anda menghapus data arsitek anda juga harus menghapus data akun di halaman akun</p>
                  <div class="right">
                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                  </div> Tidak Jadi diimplementasikan-->
								</div>
                </div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                        <th>NAMA DEPAN</th>
                        <th>NAMA BELAKANG</th>
                        <th>JENIS KELAMIN</th>
                        <th>ALAMAT</th>
                        <th>Email</th>
                        <!-- <th>AKSI</th> tidak jadi diimplementasikan-->
                        <th>KTP</th>
											</tr>
										</thead>
										<tbody>
                      @foreach($data_arsitek as $arsitek)
                      <tr>
                        <td><a href="/arsitek/{{$arsitek->id}}/profile">{{$arsitek->nama_depan}}</a></td>
                        <td><a href="/arsitek/{{$arsitek->id}}/profile">{{$arsitek->nama_belakang}}</a></td>
                        <td>{{$arsitek->jenis_kelamin}}</td>
                        <td>{{$arsitek->alamat}}</td>
                        <td>{{$arsitek->User->email}}</td>
                        <!-- <td>
                          <a href="/arsitek/{{$arsitek->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                          <a href="/arsitek/{{$arsitek->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Delete</a>
                        </td> tidak jadi di implementasikan -->
                        <td><a href="/arsitek/{{$arsitek->id}}/ktp" class="btn btn-primary btn-sm">LihatKTP</a></td>
                      </tr>
                      @endforeach
										</tbody>
									</table>
								</div>
							</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah arsitek</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/arsitek/create" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="form-group {{$errors->has('nik') ? 'has-error' : ''}}">
                <label for="exampleInputEmail1">NIK</label>
                <input name="nik" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="NIK" value="{{old('nik')}}">
                @if($errors->has('nik'))
                  <span class="help-block">{{$errors->first('nik')}}</span>
                @endif
              </div>
              <div class="form-group {{$errors->has('nama_depan') ? 'has-error' : ''}}">
                <label for="exampleInputEmail1">Nama Depan</label>
                <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nama Depan" value="{{old('nama_depan')}}">
                @if($errors->has('nama_depan'))
                  <span class="help-block">{{$errors->first('nama_depan')}}</span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Belakang</label>
                <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nama Belakang" value="{{old('nama_belakang')}}">
              </div>
              <div class="form-group{{$errors->has('email') ? 'has-error' : ''}}">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Email" value="{{old('email')}}">
                @if($errors->has('email'))
                  <span class="help-block">{{$errors->first('email')}}</span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Lahir</label>
                <input name="tanggal_lahir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Email" value="{{old('tanggal_lahir')}}">
              </div>
              <div class="form-group{{$errors->has('jenis_kelamin') ? 'has-error' : ''}}">
                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1" >
                  <option value="Pria"{{(old('jenis_kelamin') == 'Pria') ? ' selected' : ''}}>Pria</option>
                  <option value="Wanita"{{(old('jenis_kelamin') == 'Wanita') ? ' selected' : ''}}>Wanita</option>
                </select>
                @if($errors->has('jenis_kelamin'))
                  <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
                @endif
              </div>
              <div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
                <label for="exampleFormControlTextarea1">Alamat</label>
                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{old('alamat')}}</textarea>
                @if($errors->has('alamat'))
                  <span class="help-block">{{$errors->first('alamat')}}</span>
                @endif
              </div>
              <div class="form-group {{$errors->has('no_hp') ? 'has-error' : ''}}">
                <label for="exampleInputEmail1">No Hp</label>
                <input name="no_hp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="No hp" value="{{old('no_hp')}}">
                @if($errors->has('no_hp'))
                  <span class="help-block">{{$errors->first('no_hp')}}</span>
                @endif
              </div>
              <div class="form-group {{$errors->has('ktp') ? 'has-error' : ''}}">
                <label for="exampleFormControlTextarea1">Scan Photo KTP</label>
                <input type="file" name="ktp" class="form-control">
                @if($errors->has('ktp'))
                  <span class="help-block">{{$errors->first('ktp')}}</span>
                @endif
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div> Tidak jadi diimplementasikan -->
@stop
