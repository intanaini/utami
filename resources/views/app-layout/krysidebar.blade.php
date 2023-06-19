<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="{{asset('AdminLTE')}}/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity:5">
      <span class="brand-text font-weight-light">WM Utami 354</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        {{-- <div class="image">
          <img src="{{asset('AdminLTE/dist')}}/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> --}}
        <div class="info">
          <a href="#" class="d-block">Karyawan</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               {{-- <li class="nav-item">
                <a href="/karyawan" class="nav-link">
                  <i class="nav-icon fa fa-user"></i>
                  <p>
                    Karyawan
                  </p>
                </a>
              </li> --}}
              <li class="nav-item">
                <a href="/dftrpesanan" class="nav-link">
                  <i class="nav-icon fas fa-clipboard"></i>
                  <p>
                    Daftar Pesanan
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dftrreservasi" class="nav-link">
                  <i class="nav-icon far fa-clipboard"></i>
                  <p>
                    Daftar Reservasi
                  </p>
                </a>
              </li>



      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
