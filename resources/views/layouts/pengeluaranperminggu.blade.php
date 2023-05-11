@extends('layouts.main')

@section('isi')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Daftar Laporan Pengeluaran PerMinggu Warung Makan Utami 354</h3>
    </div>
    {{-- @json($laporan) --}}
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example2" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Waktu</th>
              <th>Nama Bahan</th>
              <th>Total Bahan</th>
              <th>Sub Total</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($laporan as $key )
                <tr>

                    <td>{{ $key->waktu_pembelian}}</td>
                    <td>{{ $key->nama_bahan }}</td>
                    <td>{{ $key->total_bahan }} kg</td>
                    <td>{{ $key->sub_total }}</td>
                  </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th></th>
                <th></th>
                <th>Total</th>
              <th>Rp. {{ number_format($laporan->sum('sub_total')) }}</th>
            </tr>
            </tfoot>
          </table>
      </div>
    <!-- /.card-body -->
  </div>


@endsection


