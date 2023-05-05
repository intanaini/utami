@extends('layouts.krymain')

@section('kry.isi')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Daftar Reservasi Warung Makan Utami 354</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>ID Reservasi</th>
                <th>waktu</th>
                <th>Nama Pelanggan</th>
                <th>Menu Pesanan</th>
                <th>Total Pesanan</th>
                <th>Total Pembayaran</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>183</td>
                <td>01-06-2023</td>
                <td>Danil</td>
                <td>Ayam Panggang & Es teh</td>
                <td>5</td>
                <td><span class="tag tag-success">270.000</span></td>
              </tr>
              <tr>
                <td>219</td>
                <td>01-06-2023</td>
                <td>Sandara</td>
                <td>Ayam Bakar & Jus Jambu</td>
                <td>10</td>
                <td><span class="tag tag-warning">230.000</span></td>
              </tr>
              <tr>
                <td>657</td>
                <td>01-06-2023</td>
                <td>Lisa</td>
                <td>Sop Ayam Pecok & Es Jeruk</td>
                <td>25</td>
                <td><span class="tag tag-primary">450.000</span></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
<div class="float-right d-none d-sm-block">
<b>Version</b> 3.2.0-rc
</div>
<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrap
@endsection
