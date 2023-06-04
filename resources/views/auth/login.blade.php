<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Manajemen Tabungan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/font-awesome-4.6.3/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <b>Manajemen</b>Tabungan
  </div>
  <!-- User name -->
  <div class="lockscreen-name">Login atau Registrasi di <a href="{{ url('/register') }}">sini</a></div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="{{ asset('dist/img/avatar3.png') }}" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" method="post" action="{{ url('/login') }}">
    {{ csrf_field() }}
      <div class="input-group">
        <input type="email" name="email"  class="form-control" placeholder="Email">
        <input name="password" type="password" class="form-control" placeholder="Password">

        <div class="input-group-btn">
          <button type="submit" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  @if ($errors->has('password'))
  <div class="help-block text-center">
    Password yang Anda masukkan salah!
  </div>
  @endif
  <div class="help-block text-center">
    Masukkan password untuk masuk aplikasi
  </div>
  <div class="lockscreen-footer text-center">
    Copyright Willy Ahmad Jayadi
  </div>
</div>
<!-- /.center -->

<!-- jQuery 2.2.0 -->
<script src="{{ asset('plugins/jQuery/jQuery-2.2.0.min.js')}} "></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
