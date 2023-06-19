<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{asset('AdminLTE')}}/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity:5">
      <span class="brand-text font-weight-light">Warung Utami</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        {{-- <div class="image">
          <img src="{{asset('AdminLTE/dist')}}/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> --}}
        {{-- <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div> --}}
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
               <li class="nav-item">
                <a href="/home" class="nav-link">
                  <i class="nav-icon fa fa-user"></i>
                  <p>
                    Karyawan
                  </p>
                </a>
              </li>

            <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-hamburger"></i>
              <p>
                Stok Bahan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/bahanmkn" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bahan Makanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/bahanmnm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bahan Minuman</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-hamburger"></i>
              <p>
                Stok Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/smenumkn" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu Makanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/smenumnm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu Minuman</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder-open"></i>
              <p>
                Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/lpemasukan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Pemasukan</p>
                </a>
              </li>
              {{-- <ul class="nav nav-treeview"> --}}
                <li class="nav-item">
                  <a href="/lpengeluaran" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Laporan Pengeluaran</p>
                  </a>
                </li>

              {{-- <li class="nav-item">
                <a href="/grafikmasuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Grafik Tahunan</p>
                </a>
              </li>
            </ul>
          </li> --}}
{{--
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Grafik Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/lpengeluaran" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan </p>
                </a>
              </li> --}}

              {{-- <ul class="nav nav-treeview"> --}}
                {{-- <li class="nav-item">
                  <a href="/grafikthn" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Grafik Laporan Tahunan</p>
                  </a>
                </li>

                <li class="nav-item">
                    <a href="/home" class="nav-link">
                      <i class="nav-icon fa fa-user"></i>
                      <p>
                        Karyawan
                      </p>
                    </a>
                  </li> --}}
              {{-- <li class="nav-item">
                <a href="/grafikthn" class="nav-link">
                  <i class="nav-icon fa fa-user"></i>
                  <p>
                    Grafik
                  </p>
                </a>
              </li> --}}
              {{-- <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/grafikthn" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Grafik Tahunan</p>
                  </a>
                </li> --}}
              {{-- <li class="nav-item">
                <a href="/pengeluaranperbulan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengeluaran Perbulan</p>
                </a>
              </li> --}}
            {{-- </ul>
          </li> --}}

          {{-- <ul class="nav nav-treeview"> --}}
            {{-- <li class="nav-item">
                <a href="/home" class="nav-link">
                  <i class="nav-icon fa fa-user"></i>
                  <p>
                    Karyawan
                  </p>
                </a>
              </li> --}}
              </ul>
              <li class="nav-item">
                <a href="/grafikthn" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Grafik Laporan
                  </p>
                </a>
              </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
