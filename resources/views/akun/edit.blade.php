@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Profile</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">User Profile</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle"
                   src="{{auth()->user()->getAvatar()}}"
                   alt="Avatar">
            </div>

            <h3 class="profile-username text-center">{{auth()->user()->name}}</h3>

            <p class="text-muted text-center">{{auth()->user()->email}}</p>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item"><a>Edit Profile</a></li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
						<div class="panel-body">
              <form action="/akun/{{$user->id}}/update" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="exampleInputEmail1">nama</label>
                  <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$user->name}}">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Photo Avatar</label>
                  <input type="file" name="avatar" class="form-control">
                </div>
                <button type="submit" class="btn btn-warning">Update</button>
                <a href="/profiladmin" class="btn btn-primary">Kembali</a>
              </form>
						</div>
          </div><!-- /.card-body -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
@stop
