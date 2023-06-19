@extends('layouts.krymain')

@section('kry.isi')
<div class="row">
    <div class="col-12">
        <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">Daftar Reservasi Warung Makan Utami 354</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                {{-- <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button> --}}
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
        <table id="example2" class="table table-bordered table-striped">
          <table class="table table-head-fixed text-nowrap">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Waktu</th>
                    <th>Nama </th>
                    <th>Menu </th>
                    <th>Jumlah</th>
                    <th>Total Bayar</th>
                    {{-- <th>Metode Bayar</th> --}}
                    <th>Waktu Reservasi</th>
                    <th>No Telpon</th>
                    <th>Catatan</th>
                    <th>Status</th>
                  </tr>
                </thead>
                @php
                $no = 1;
                @endphp
                @foreach ($pesan as $item)

                <tbody>
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->created_at}}</td>
                    <td>{{ $item->nama_pelanggan}}</td>
                    <td>@foreach ($item->detail as $key)
                        {{$key->menu->nama_menu.' x '.$key->qty}} <br>

                    @endforeach</td>
                    <td>{{ $item->total_pesanan}}</td>
                    <td>{{ $item->total_pembayaran}}</td>
                    {{-- <td>{{ $item->metode_pembayaran}}</td> --}}
                    <td>{{ $item->waktu->format('d M Y H:i:s a')}}</td>
                    <td>{{ $item->no_telepon}}</td>
                    <td>{{ $item->catatan}}</td>
<td>
    <form action="{{ route('updateStatusPsn',$item->id)}}" method="POST">
        @csrf
        @method('PUT')
        <select class="custom-select form-control-border {{ $item->status_pesanan == 'Reservasi' ? 'bg-yellow text-white' : ($item->status_pesanan == 'Di Proses' ? 'bg-orange text-white' : ($item->status_pesanan == 'Selesai' ? 'bg-blue text-white' : ($item->status_pesanan == 'Dibatalkan' ? 'bg-red text-white' : ''))) }}" onchange="this.form.submit()" name="status_pesanan" id="status_pesanan" style="width: 150px">
            <option {{ $item->status_pesanan == 'Reservasi' ? 'selected' : '' }} value="Reservasi" class="bg-yellow">Reservasi</option>
            <option {{ $item->status_pesanan == 'Di Proses' ? 'selected' : '' }} value="Di Proses" class="bg-orange">Diproses</option>
            {{-- <option {{ $item->status_pesanan == 'Disajikan' ? 'selected' : '' }} value="Disajikan" class="bg-blue">Disajikan</option> --}}
            <option {{ $item->status_pesanan == 'Selesai' ? 'selected' : '' }} value="Selesai" class="bg-green">Selesai</option>
            <option {{ $item->status_pesanan == 'Dibatalkan' ? 'selected' : '' }} value="Dibatalkan" class="bg-red">Dibatalkan</option>

        </select>
    {{-- <select class="custom-select form-control-border" onchange="this.form.submit()" name="status_pesanan" id="status_pesanan">
        <option {{ $item->status_pesanan == 'Reservasi' ? 'selected':''}} value="Reservasi" >Reservasi</option>
        <option {{ $item->status_pesanan == 'Di Proses' ? 'selected':''}} value="Di Proses" >Diproses</option>
        <option {{ $item->status_pesanan == 'Disajikan' ? 'selected':''}} value="Disajikan" >Disajikan</option>
        <option {{ $item->status_pesanan == 'Selesai' ? 'selected':''}} value="Selesai" >Selesai</option>
      </select> --}}
    </form>
</td>
 </tr>

                </tbody>
                @endforeach
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
</table>
    </div>
  </div>
        </div>
        <!-- /.card-body -->
      {{-- </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.row -->
</div><!-- /.container-fluid --> --}}
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
