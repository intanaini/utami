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
        <div class="card-body table-responsive p-0" style="width:100%">

          <table class="table table-head-fixed text-nowrap" >
            <thead>
              <tr>
                <th>ID</th>
                <th>Waktu</th>
                <th>Nama Pelanggan</th>
                <th style="width:20%"> Menu  </th>
                <th>Jumlah Pesanan</th>
                <th>Total</th>
                <th>No Meja</th>
                <th>Catatan</th>
                <th>Status</th>
                {{-- <th>Jenis Pesanan</th> --}}

              </tr>
            </thead>
            @foreach ($pesan as $item)

            <tbody>
              <tr>
                <td>{{ $item->id}}</td>
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

                <td>
                    <form action="{{ route('updateStatusPsn',$item->id)}}" method="POST">
                        @csrf
                        @method('PUT')

                    <select class="custom-select form-control-border" onchange="this.form.submit()" name="status_pesanan" id="status_pesanan">
                        <option {{ $item->status_pesanan == 'Di Proses' ? 'selected':''}} value="Di Proses" >Diproses</option>
                        <option {{ $item->status_pesanan == 'Disajikan' ? 'selected':''}} value="Disajikan" >Disajikan</option>
                        <option {{ $item->status_pesanan == 'Selesai' ? 'selected':''}} value="Selesai" >Selesai</option>
                      </select>
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
