<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{asset('AdminLTE')}}/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity:5">
      <span class="brand-text font-weight-light">Menu WM Utami 354</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

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

            <li class="nav-item">
                <a href="/pemesananmkn" class="nav-link">
                  <i class="nav-icon fas fa-bacon"></i>
                  <p>
                    Makan Ditempat
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/pemesananreservasi" class="nav-link">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>
                    Reservasi
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/cekpesanan" class="nav-link">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>
                    Cek Pesanan
                  </p>
                </a>
              </li>


      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
