<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Wifdamu | YourArticles!</title>
  <link href="{{asset('lte/dist/img/logo.png')}}" rel='shortcut icon'>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
  
  <style>
        .container{
            padding:70px;
            position: fixed;
            top: 35%;
            left: 40%;
            margin-top: -200px;
            margin-left: -240px;
        }
        .scroll {
            max-height: 400px;
            overflow-y: auto;
        }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('admin/header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin/sidebar')

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <!-- bagian konten blog -->
            @yield('konten')
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
  
  
</div>
@include('admin/footer')
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('lte/dist/js/adminlte.min.js')}}"></script>
<script>
  $(document).on('ajaxComplete ready', function () {
      $('.modalMd').off('click').on('click', function () {
          $('#modalMdContent').load($(this).attr('value'));
          $('#modalMdTitle').html($(this).attr('title'));
      });
  });
  $(document).on('ajaxComplete ready', function () {
      $('.tambah').off('click').on('click', function () {
          $('#modalMkContent').load($(this).attr('value'));
          $('#modalMkTitle').html($(this).attr('title'));
      });
  });
</script>
<script type="text/javascript">

    $('.date').datepicker({  

       format: 'mm-dd-yyyy'

     });  

</script>
<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.data').DataTable();
    });
</script>  
</body>
</html>
