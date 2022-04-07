<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>{{ config('app.name') }} - Presensi Masuk</title>
    @include('Template.head')
    <script src="{{ asset('Js/jam.js') }}"></script>
   

</head>
<body class="hold-transition sidebar-mini" onload="realtimeClock()">

    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('Template.left-sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-left">
                                <li class="breadcrumb-item"> <a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Presensi Masuk</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <!-- /.content-header -->

            <!-- Main content -->
    <center>
    <div class="container-fluid content">
      <div class="container text-center col-md-6">
        <form action="{{ route('simpan-masuk') }}" method="post">
          @csrf
          <div class="card">
            <div class="card-header">
              Silahkan Presensi Masuk
            </div>
            <div class="card-body">
            <center>
              <label id="clock" style="font-size: 80px;">
              </label>
            </center>
          <button class="btn btn-primary btn-presensi" type="submit">Klik Untuk Presensi Masuk</button>
        </form>
      </div>
    </div>
    </center>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
       

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include('Template.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    @include('Template.script')
</body>
</html>
