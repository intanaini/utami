@extends('layouts.main')

@section('isi')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Daftar Laporan Pengeluaran Warung Makan Utami 354</h3>
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
                                    <th>Waktu</th>
                                    <th>Nama Bahan</th>
                                    <th>Total Bahan</th>
                                    <th>Sub Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($laporan as $key)
                                    <tr>

                                        <td>{{ $key->waktu_pembelian }}</td>
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
            </table>
        </div>
    </div>
    @endsection
