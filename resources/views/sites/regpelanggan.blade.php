@extends('layouts.regis')

@section('content')
<div class="register-box">
  <div class="register-logo">
    <a><b>Registrasi</b> Pelanggan</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register sebagai Pelanggan</p>

      <form action="/postregister2" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
              <form action="" method="post" class="php-email-form" enctype="multipart/form-data">
                <div class="form-group {{$errors->has('nama_depan') ? 'has-error' : ''}}">
                  <label for="exampleFormControlSelect1">Nama Depan</label>
                  <input name="nama_depan" type="text" class="form-control" id="name"
                  placeholder="Nama Depan" value="{{old('nama_depan')}}">
                  @if($errors->has('nama_depan'))
                    <span class="help-block">{{$errors->first('nama_depan')}}</span>
                  @endif
                </div>
                <div class="form-group {{$errors->has('nama_belakang') ? 'has-error' : ''}}">
                  <label for="exampleFormControlSelect1">Nama Belakang</label>
                  <input name="nama_belakang" type="text" class="form-control" id="name"
                  placeholder="Nama Depan" value="{{old('nama_belakang')}}">
                  @if($errors->has('nama_belakang'))
                    <span class="help-block">{{$errors->first('nama_belakang')}}</span>
                  @endif
                </div>
                <div class="form-group{{$errors->has('email') ? 'has-error' : ''}}">
                  <label for="exampleFormControlSelect1">Email</label>
                  <input name="email" type="email" class="form-control" id="email"
                  placeholder="Email" value="{{old('email')}}">
                  @if($errors->has('email'))
                    <span class="help-block">{{$errors->first('email')}}</span>
                  @endif
                </div>
                <div class="form-group{{$errors->has('jenis_kelamin') ? 'has-error' : ''}}">
                  <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                  <select name="jenis_kelamin" class="form-control" id="name" >
                    <option value="Pria"{{(old('jenis_kelamin') == 'Pria') ? ' selected' : ''}}>Pria</option>
                    <option value="Wanita"{{(old('jenis_kelamin') == 'Wanita') ? ' selected' : ''}}>Wanita</option>
                  </select>
                  @if($errors->has('jenis_kelamin'))
                    <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Tanggal Lahir</label>
                  <input name="tanggal_lahir" type="date" class="form-control" id="name"
                  placeholder="Tanggal Lahir" value="{{old('tanggal_lahir')}}">
                </div>
                <div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
                  <label for="exampleFormControlSelect1">Alamat</label>
                  <textarea name="alamat" class="form-control" id="name" rows="3" >{{old('alamat')}}</textarea>
                  @if($errors->has('alamat'))
                    <span class="help-block">{{$errors->first('alamat')}}</span>
                  @endif
                </div>
                <div class="form-group {{$errors->has('no_hp') ? 'has-error' : ''}}">
                  <label for="exampleFormControlSelect1">No Hp</label>
                  <input name="no_hp" type="text" class="form-control" id="name"
                  placeholder="No hp" value="{{old('no_hp')}}">
                  @if($errors->has('no_hp'))
                    <span class="help-block">{{$errors->first('no_hp')}}</span>
                  @endif
                </div>
                <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                  <label for="exampleFormControlSelect1">Password</label>
                  <input name="password" type="password" class="form-control" id="name"
                  placeholder="password" value="{{old('password')}}">
                  @if($errors->has('password'))
                    <span class="help-block">{{$errors->first('password')}}</span>
                  @endif
                </div>
                <div class="form-group {{$errors->has('confirmation') ? 'has-error' : ''}}">
                  <label for="exampleFormControlSelect1">Password</label>
                  <input name="confirmation" type="password" class="form-control" id="name"
                  placeholder="konfirmasi password">
                  @if($errors->has('confirmation'))
                    <span class="help-block">{{$errors->first('confirmation')}}</span>
                  @endif
                </div>
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
                  </form>
              </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="/login" class="text-center">Sudah punya akun</a>
      </div>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
@stop
