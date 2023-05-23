@extends('layouts.main')

@section('isi')
{{-- @json($laporan) --}}
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Daftar Laporan Pengeluaran Perbulan Warung Makan Utami 354


      </h3>
    </div>
    {{-- @json($laporan) --}}
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example2" class="table table-bordered table-striped">
            <thead>
                <tr><th >ID</th>
              <th >Waktu</th>
              <th >Nama</th>
            </th>
            <th >Menu</th>
          </th>
          <th >Jumlah Pesanan</th>
          </th>
          <th>Total Pembayaran</th>
          </th>
          <th>Status</th>
        </th>
        <th >Jenis Pesanan</th>
        </th>
        </tr>
                </thead>
                <tbody>
                    @foreach ($lpmasuk as $item)

                <tr class="odd">
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->created_at}}</td>
                    <td>{{ $item->nama_pelanggan}}</td>

                    <td style="width:20%">@foreach ($item->detail as $key)

                        {{$key->menu->nama_menu.' x '.$key->qty}}

                    @endforeach</td>
                    <td>{{ $item->total_pesanan}}</td>
                    <td>{{ $item->total_pembayaran}}</td>
                    <td>{{ $item->status_pesanan}}</td>
                    <td>{{ $item->type_pesanan}}</td>

                </tr></tbody>
                @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th>Total</th>
                <th>{{ $lpmasuk->sum('total_pesanan')}}</th>
              <th>Rp. {{ number_format($lpmasuk->sum('total_pembayaran')) }}</th>
            </tr>
            </tfoot>
          </table>
      </div>
    <!-- /.card-body -->
  </div>


@endsection


