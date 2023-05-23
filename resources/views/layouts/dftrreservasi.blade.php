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
                    <th>ID </th>
                    <th>Waktu</th>
                    <th>Nama Pelanggan</th>
                    <th>Menu </th>
                    <th>Jumlah Pesanan</th>
                    <th>Total Pembayaran</th>
                    <th>Waktu Reservasi</th>
                    <th>No Telpon</th>
                    <th>Status</th>
                  </tr>
                </thead>
                @foreach ($pesan as $item)

                <tbody>
                  <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->created_at}}</td>
                    <td>{{ $item->nama_pelanggan}}</td>
                    <td>@foreach ($item->detail as $key)
                        {{$key->menu->nama_menu.' x '.$key->qty}}

                    @endforeach</td>
                    <td>{{ $item->total_pesanan}}</td>
                    <td>{{ $item->total_pembayaran}}</td>
                    <td>{{ $item->waktu->format('d M Y H:i:s a')}}</td>
                    <td>{{ $item->no_telepon}}</td>
<td>
    <form action="{{ route('updateStatusPsn',$item->id)}}" method="POST">
        @csrf
        @method('PUT')

    <select class="custom-select form-control-border" onchange="this.form.submit()" name="status_pesanan" id="status_pesanan">
        <option {{ $item->status_pesanan == 'Reservasi' ? 'selected':''}} value="Reservasi" >Reservasi</option>
        <option {{ $item->status_pesanan == 'Di Proses' ? 'selected':''}} value="Di Proses" >Diproses</option>
        <option {{ $item->status_pesanan == 'Disajikan' ? 'selected':''}} value="Disajikan" >Disajikan</option>
        <option {{ $item->status_pesanan == 'Selesai' ? 'selected':''}} value="Selesai" >Selesai</option>
      </select>
    </form>
</td>

                  </tr>

                </tbody>
                @endforeach
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
