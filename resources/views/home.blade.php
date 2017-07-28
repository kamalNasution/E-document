@extends('layouts.app')

@section('content')
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Document</title>
    <!-- include libraries(jQuery, bootstrap) -->
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('assets/AdminLTE-2.3.11/bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/font-awesome-4.5.0/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('assets/ionicons-2.0.1/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/AdminLTE-2.3.11/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('assets/AdminLTE-2.3.11/dist/css/skins/_all-skins.min.css') }}">

  <script src="{{ asset('assets/AdminLTE-2.3.11/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
  <script src="{{ asset('assets/AdminLTE-2.3.11/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/AdminLTE-2.3.11/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('assets/AdminLTE-2.3.11/plugins/fastclick/fastclick.js') }}"></script>
  <script src="{{ asset('assets/AdminLTE-2.3.11/dist/js/app.min.js') }}"></script>
  <script src="{{ asset('assets/AdminLTE-2.3.11/bootstrap/js/validator.min.js') }}"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<body class="hold-transition skin-green-light fixed sidebar-mini">
          <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                      Dasbor
                    </h1>
               </section>
         <!-- =============================================== -->
          <!-- Left side column. contains the sidebar -->
                  <aside class="main-sidebar">
                    <!-- sidebar: style can be found in sidebar.less -->
                    <section class="sidebar">
                      <!-- Sidebar user panel -->
                      <div class="user-panel">
                        <div class="pull-left image">
                          <img src="{{ asset('img/berteman.jpg') }}" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                          <p>Administrator</p>
                          Ilmu Komputer IPB
                        </div>
                      </div>
                      <!-- Sidebar Menu -->
                      <ul class="sidebar-menu">
                        <li><a href="{{ url('/pilihsurat') }}"><span>Create Mail</span></a></li>
                        <li><a href="{{ url('/pesan') }}"><span>Inbox</span></a></li>
                        <li><a href="{{ url('/kirimpesan') }}"><span>Sent Mail</span></a></li>
                        <li><a><span>Draft</span></a></li>
                        <li><a><span>Spam</span></a></li>
                        <!--li @if (request()->is('admin/download')) class="active" @endif><a href="{{ url('admin/download') }}"><span>Download</span></a></li-->
                      </ul><!-- /.sidebar-menu -->
                    </section>
                    <!-- /.sidebar -->
                  </aside>  
                     <!-- Main content -->
                    <section class="content">
                        <!-- Default box -->
                        <div class="box">
                            <div class="box-header with-border">
                                </div>
                                    <div class="box-body table-responsive">
                                        <ul>
                                                <h3>Silahkan Memulai Pekerjaan Anda!</h3>
                                            <li><b>Create Mail</b>,&nbsp; &nbsp; untuk membuat surat</li>
                                            <li><b>Inbox</b>,&nbsp; &nbsp; untuk mengecek revisi beserta pesan masuk lainnya</li>
                                        </ul>
                                    </div>
                                    <!-- /.box body -->
                                </div>
                            </div>
                        </div>
                        <!-- ./box -->
                    <section>
            <br>
</body>
@endsection
