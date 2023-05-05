@extends('layouts.main')

@section('isi')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Daftar Laporan Pengeluaran Warung Makan Utami 354</h3>
    </div>
    <!-- /.card-header -->
    <!-- resources/views/laporan/index.blade.php -->

<form method="post" action="{{ route('laporan.filter') }}">
    @csrf
    <select name="bulan">
        <option value="">-- Pilih Bulan --</option>
        <option value="1">Januari</option>
        <option value="2">Februari</option>
        <option value="3">Maret</option>
        <option value="4">April</option>
        <option value="5">Mei</option>
        <option value="6">Juni</option>
        <option value="7">Juli</option>
        <option value="8">Agustus</option>
        <option value="9">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>

        <!-- Tambahkan pilihan bulan sesuai kebutuhan -->
    </select>
    <button type="submit">Filter</button>
</form>

<!-- Tampilkan data laporan sesuai dengan bulan yang dipilih -->
{{-- <ul>
    @foreach ($laporan as $item)
        <li>{{ $item->nama_bahan }} {{ $item->total_bahan }} - {{ $item->waktu_pembelian }}</li>
    @endforeach
</ul> --}}

    <div class="card-body">
        <table id="example2" class="table table-bordered table-striped">
            {{-- <form method="post" action="{{ route('laporan.filter') }}">
                @csrf
                <select name="bulan">
                    <option value="">-- Pilih Bulan --</option>
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option> --}}

                    <!-- Tambahkan pilihan bulan sesuai kebutuhan -->
                {{-- </select>
                <button type="submit">Filter</button>
            </form> --}}
            <div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
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


