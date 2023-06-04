<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title') | Manajemen Tabungan</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/font-awesome-4.6.3/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/css/skins/skin-green.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datepicker/datepicker3.css')}}">
  @yield('page_css')
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo" data-toggle="offcanvas">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">MT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Manajemen</b>Tabungan</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="{{ url('logout') }}"><i class="fa fa-sign-out"></i>Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('dist/img/avatar3.png') }}" class="img-circle" alt="User Image" style="background: white">
        </div>
        <div class="pull-left info">
          <p> {{ Auth::user()->name }} </p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li @if ($page == 'dashboard') class="active" @endif><a href="{{ url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dasbor</span></a></li>
        <li @if ($page == 'student') class="active" @endif><a href="{{ url('student') }}"><i class="fa fa-group"></i> <span>Siswa</span></a></li>
        <li @if ($page == 'saving') class="active" @endif><a href="{{ url('saving') }}"><i class="fa fa-money"></i> <span>Tabungan</span></a></li>
        <li class="treeview @if ($page == 'transaction' || $page == 'deposit' || $page == 'withdrawal' || $page == 'add_transaction') active @endif">
          <a href="#"><i class="fa fa-refresh"></i> <span>Transaksi</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li @if ($page == 'add_transaction') class="active" @endif><a href="{{ url('transaction/add') }}"><i class="fa fa-circle-o"></i>Tambah Transaksi</a></li>
            <li @if ($page == 'transaction') class="active" @endif><a href="{{ url('transaction') }}"><i class="fa fa-circle-o"></i>Riwayat Transaksi</a></li>
          <li @if ($page == 'rekap') class="active" @endif><a href="{{ url('transaction/rekap?start='.base64_encode(date('Y-m-d')).'&end='.base64_encode(date('Y-m-d'))) }}"><i class="fa fa-circle-o"></i>Rekap Transaksi</a></li>
          </ul>
        </li>
        <li @if ($page == 'about') class="active" @endif><a href="{{ url('about') }}"><i class="fa fa-info"></i> <span>Tentang</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @yield('title')
        <small>@yield('subtitle')</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      @if ($page == 'dashboard')
      <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Selamat Datang</h4>Di aplikasi Manajemen Tabungan
      </div>
      @endif
      @if (session('success'))
      <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Sukses!</h4>{!! session('success') !!}
      </div>
      @endif
      @if (session('warning'))
      <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-warning"></i> Peringatan!</h4>{!! session('warning') !!}
      </div>
      @endif
      <!-- Your Page Content Here -->
      @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <!-- Default to the left -->
    <strong>Copyright &copy; 2023 <a href="#">Willy Ahmad Jayadi</a>
  </footer>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.0 -->
<script src="{{ asset('plugins/jQuery/jQuery-2.2.0.min.js')}}"></script>
<script src="{{ asset('plugins/jQueryUI/jquery-ui.min.js')}}"></script>
<script src="{{ asset('plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- jquery jquery-3.3.1.js -->
{{-- <script src="{{ asset('plugins/jQuery/jquery-3.3.1.js')}}"></script> --}}
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/app.min.js') }}"></script>

{{-- date picker --}}
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>


<!-- Custom JS -->
@yield('page_js')

</body>
</html>
