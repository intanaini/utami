@extends('layouts.krymain')


@section('kry.isi')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Daftar Pesanan Warung Makan Utami 354</h3>

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
                <th>ID Pemesanan</th>
                <th>waktu</th>
                <th>Nama Pelanggan</th>
                <th>Jumlah Pesanan</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>183</td>
                <td>01-06-2023</td>
                <td>Danil</td>
                <td>3</td>
                <td><span class="tag tag-success">74.000</span></td>
              </tr>
              <tr>
                <td>219</td>
                <td>01-06-2023</td>
                <td>Sandara</td>
                <td>2</td>
                <td><span class="tag tag-warning">60.000</span></td>
              </tr>
              <tr>
                <td>657</td>
                <td>01-06-2023</td>
                <td>Lisa</td>
                <td>3</td>
                <td><span class="tag tag-primary">50.000</span></td>
              </tr>
              <tr>
                <td>175</td>
                <td>01-06-2023</td>
                <td>Mikaeil</td>
                <td>3</td>
                <td><span class="tag tag-danger">50.000</span></td>
              </tr>
              <tr>
                <td>134</td>
                <td>01-06-2023</td>
                <td>Kei</td>
                <td>3</td>
                <td><span class="tag tag-success">60.000</span></td>
              </tr>
              <tr>
                <td>494</td>
                <td>01-06-2023</td>
                <td>musa</td>
                <td>3</td>
                <td><span class="tag tag-warning">80.000</span></td>
              </tr>
              <tr>
                <td>832</td>
                <td>01-06-2023</td>
                <td>Jeki</td>
                <td>3</td>
                <td><span class="tag tag-primary">40.000</span></td>
              </tr>
              <tr>
                <td>982</td>
                <td>01-06-2023</td>
                <td>Reni</td>
                <td>7</td>
                <td><span class="tag tag-danger">100.000</span></td>
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
</div>
@endsection
