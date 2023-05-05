<!DOCTYPE html>
<html lang="en">
@include('app-layout.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader
  {-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('AdminLTE/dist')}}//img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> --} -->

@include('app-layout.navbar')
@include('app-layout.sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   {{-- @include('app-layout.breadcrumb') --}}
   <!-- Main content -->
   <section class="content">
       <div class="container-fluid">
           <!-- Small boxes (Stat box) -->
           @yield('isi')


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('app-layout.footer')


</div>
<!-- ./wrapper -->

<!-- jQuery -->

@include('app-layout.script')
@stack('js')
</body>
</html>
