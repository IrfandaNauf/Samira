<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Samira Dashboard</title>
        
        <link href="{{ asset('landingpage/img/LOGO_ICON.png') }}" rel="icon">
        <link href="{{ asset('landingpage/img/LOGO_ICON.png') }}" rel="apple-touch-icon">

        <script src="https://kit.fontawesome.com/e44701b8b4.js" crossorigin="anonymous"></script>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('dashboard/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="{{ asset('dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset('dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{ asset('dashboard/plugins/jqvmap/jqvmap.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('dashboard/dist/css/adminlte.min.css') }}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset('dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ asset('dashboard/plugins/daterangepicker/daterangepicker.css') }}">
        <!-- summernote -->
        <link rel="stylesheet" href="{{ asset('dashboard/plugins/summernote/summernote-bs4.min.css') }}">
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            <!-- Navbar -->
            <!-- <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #030F29">
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <div class="nav-link">
                            <a href="">
                                <img src="{{ asset('dashboard/dist/img/user.png') }}" class="img-circle elevation-2" alt="User Image" role="button" width="30px" height="30px">
                            </a>
                        </div>
                    </li>
                </ul>
            </nav> -->
            <!-- /.navbar -->

            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #254895">
                <!-- Brand Logo -->
                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- SidebarSearch Form -->
                    <div class="form-inline">
                        <a href="{{ route('dashboard') }}" class="brand-link" >
                            <img src="{{ asset('dashboard/dist/img/HD LOGO.png') }}" style="width:150px; height:100%; margin-left: 30px" alt="">
                            <!-- <span class="brand-text font-weight-light">Islamic Vibes</span> -->
                        </a>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2" >
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="{{ route('dashboard') }}" class="nav-link =">
                                <i class="nav-icon fas fa-bars"></i>
                                <p>
                                    Dashboard
                                </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('prestasi.index') }}" class="nav-link active">
                                <i class="nav-icon fas fa-trophy"></i>
                                <p>
                                    Prestasi
                                </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('galeri.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-image"></i>
                                <p>
                                    Galeri
                                </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('paket.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-box"></i>
                                <p>
                                    Paket
                                </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('konten.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-video"></i>
                                    <p>
                                        Sajian Video
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>

                        <center>
                            <button type="button" class="btn btn-danger" style="margin-top: 50%;">
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a>
                            </button>
                        </center>
                        <form id="logout-form" action="#" method="POST" class="d-none">
                            @csrf
                        </form>
                    
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1><center><b>EDIT PRESTASI</b></center></h1>
            <button type="submit" class="btn btn-warning float-right" style="margin: 20px;"><a href="{{ route('prestasi.index') }}"><i class="right fas fa-angle-left"> Kembali</i></a></button>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-12">
            <div>
                <!-- Horizontal Form -->
                <div class="card card-info">
                  <!-- form start -->
                  <form class="form-horizontal" method="post" action="{{ route('prestasi.update', $prestasi->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <p></p>
                        <div class="form-group row">
                            <label for="gambar_prestasi" class="col-sm-2 col-form-label">Foto Prestasi</label>
                            <div class="col-sm-10">
                              <input type="file" class="form-control" name="gambar_prestasi">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="gambar_prestasi" class="col-sm-2 col-form-label">Foto Saat Ini</label>
                            <div class="col-sm-10">
                            <img src="{{ asset('uploads/'. $prestasi->gambar_prestasi) }}" width="200">
                            </div>
                          </div>
                        <button type="submit" class="btn btn-primary float-right" style="margin: 20px;">Simpan</button>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card-body -->
                  </form>
                </div>
                <!-- /.card -->
              </div>
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('dashboard/plugins/jquery/jquery.min.js') }}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('dashboard/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- ChartJS -->
        <script src="{{ asset('dashboard/plugins/chart.js/Chart.min.js') }}"></script>
        <!-- Sparkline -->
        <script src="{{ asset('dashboard/plugins/sparklines/sparkline.js') }}"></script>
        <!-- JQVMap -->
        <script src="{{ asset('dashboard/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{ asset('dashboard/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
        <!-- daterangepicker -->
        <script src="{{ asset('dashboard/plugins/moment/moment.min.js') }}"></script>
        <script src="{{ asset('dashboard/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ asset('dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
        <!-- Summernote -->
        <script src="{{ asset('dashboard/plugins/summernote/summernote-bs4.min.js') }}"></script>
        <!-- overlayScrollbars -->
        <script src="{{ asset('dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('dashboard/dist/js/adminlte.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('dashboard/dist/js/demo.js') }}"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('dashboard/dist/js/pages/dashboard.js') }}"></script>
    </body>
</html>