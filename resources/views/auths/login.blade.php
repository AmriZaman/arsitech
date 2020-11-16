<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ARSITECH | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Login </b>ARSITECH</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form class="form-auth-small" action="postlogin" method="POST">
        {{csrf_field()}}
        <div class="form-group">
          <label for="signin-email" class="control-label sr-only">Email</label>
          <input name="email" type="email" class="form-control" id="signin-email" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="signin-password" class="control-label sr-only">Password</label>
          <input name="password" type="password" class="form-control" id="signin-password" placeholder="Password">
        </div>
        <div class="form-group clearfix">

        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
      </form>

      <!-- <p class="mb-1">
        <a href="/lupa">Lupa Password</a>
      </p> -->
      <p class="mb-0">
        <a href="/registerpelanggan" class="text-center">Register sebagai Pelanggan</a>
      </p>
      <p class="mb-0">
        <a href="/register" class="text-center">Register sebagai Arsitek</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>

</body>
</html>
