@extends('layouts.krymain')


@section('kry.isi')
<div class="row">
    <div class="col-12">
      {{-- <div class="card"> --}}
        <div class="card card-success">

          <div class="card-header">
            <h3 class="card-title">Daftar Pesanan Warung Makan Utami 354</h3>
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
          <div class="card-body table-responsive p-0" style="height: 700px;">
            <table id="example2" class="table table-bordered table-striped">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                            aria-describedby="example1_info">
                                  <table id="example2" class="table table-bordered table-striped">
                                    <table class="table table-head-fixed text-nowrap">
                                      <thead>
                                        <tr>
                                          <th>No</th>
                                          <th>Waktu</th>
                                          <th>Nama</th>
                                          <th> Menu  </th>
                                          <th>Jumlah </th>
                                          <th>Total</th>
                                          <th>No Meja</th>
                                          <th>Catatan</th>
                                          <th>Metode Pembayaran</th>
                                          <th>Status Pembayaran</th>
                                          <th>Status</th>
                                          {{-- <th>Jenis Pesanan</th> --}}

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

                                          <td >
                                              @foreach ($item->detail as $key)

                                              {{$key->menu->nama_menu.' x '.$key->qty}} <br>

                                              @endforeach

                                          </td>
                                          <td>{{ $item->total_pesanan}}</td>
                                          <td>{{ $item->total_pembayaran}}</td>
                                          <td>{{ $item->no_meja}}</td>
                                          <td>{{ $item->catatan}}</td>
                                          <td>{{ $item->MetodePembayaran}}</td>

                                          <td>
                                            {{-- <form action="{{ route('payment.process') }}" method="POST">
                                              @csrf
                                              <input type="number" name="amount" placeholder="Amount">
                                              <button type="submit">Bayar</button>
                                          </form> --}}

                                              </td>
                                          <td>
                                              <form action="{{ route('updateStatusPsn',$item->id)}}" method="POST">
                                                  @csrf
                                                  @method('PUT')
                                                  <select class="custom-select form-control-border  {{ $item->status_pesanan == 'Di Proses' ? 'bg-green text-white' : ($item->status_pesanan == 'Disajikan' ? 'bg-orange text-white' : ($item->status_pesanan == 'Selesai' ? 'bg-blue text-white' : '')) }}" onchange="this.form.submit()" name="status_pesanan" id="status_pesanan" style="width: 150px">
                                                      <option {{ $item->status_pesanan == 'Di Proses' ? 'selected' : '' }} value="Di Proses">Diproses</option>
                                                      <option {{ $item->status_pesanan == 'Disajikan' ? 'selected' : '' }} value="Disajikan">Disajikan</option>
                                                      <option {{ $item->status_pesanan == 'Selesai' ? 'selected' : '' }} value="Selesai">Selesai</option>
                                                  </select>
                                              {{-- <select class="custom-select form-control-border" onchange="this.form.submit()" name="status_pesanan" id="status_pesanan">
                                                  <option {{ $item->status_pesanan == 'Di Proses' ? 'selected':''}} value="Di Proses" >Diproses</option>
                                                  <option {{ $item->status_pesanan == 'Disajikan' ? 'selected':''}} value="Disajikan" >Disajikan</option>
                                                  <option {{ $item->status_pesanan == 'Selesai' ? 'selected':''}} value="Selesai" >Selesai</option>
                                                </select> --}}
                                              </form>
                                              </td>
                                          {{-- <td>{{ $item->type_pesanan}}</td> --}}

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
</div>
@endsection
