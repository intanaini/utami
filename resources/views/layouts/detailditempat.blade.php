@extends('layouts.pemesananmain')

@section('pemesanan.isi')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Detail Pemesanan Makan Ditempat Warung Makan Utami 354</h3>
        </div>
        <!-- /.card-header -->
        <!-- resources/views/laporan/index.blade.php -->
        {{-- @json($tahunz) --}}



        <div class="card-body">
            <table id="example2" class="table table-bordered table-striped">

                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                            aria-describedby="example1_info">
                            <thead>

                                <tr>
                                    <th>Nama Pelanggan</th>
                                    <th>Nonmor Meja</th>
                                    <th>Detail Pesanan</th>
                                    <th>Status Pemesanan</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach () --}}
                                    <tr>

                                        {{-- <td>{{ $key->waktu_pembelian }}</td>
                                        <td>{{ $key->nama_bahan }}</td>
                                        <td>{{ $key->total_bahan }} kg</td>
                                        <td>{{ $key->sub_total }}</td> --}}
                                    </tr>
                                {{-- @endforeach --}}
                            </tbody>
                            <tfoot>
                                <tr>
                                    {{-- <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Rp. {{ number_format($laporan->sum('sub_total')) }}</th> --}}
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </table>
        </div>
    </div>
    @endsection
