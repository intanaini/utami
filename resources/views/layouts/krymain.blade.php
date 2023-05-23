<!DOCTYPE html>
<html lang="en">
@include ('app-layout.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader
  {-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('AdminLTE/dist')}}//img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> --} -->

@include('app-layout.navbar')
@include('app-layout.krysidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
  {{-- <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profil Karyawan</h1>
          </div> --}}
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        @yield('kry.isi')
        <div class="row">
          <div class="col-lg-3 col-6">

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


</div>
<!-- ./wrapper -->
@include('app-layout.script')

<!-- jQuery -->
</body>
</html>
