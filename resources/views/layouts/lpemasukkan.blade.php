@extends('layouts.main')

@section('isi')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Daftar Laporan Pemasukan Warung Makan Utami 354</h3>
        </div>
        <!-- /.card-header -->
        <!-- resources/views/laporan/index.blade.php -->
        {{-- @json($tahunz) --}}


        <form method="post" action="{{ route('laporan.filtermasukan') }}">
            @csrf

            <select name="tanggal">
                <option value="">Tanggal</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
                <option value="32">32</option>
                {{-- <option value="33">33</option> --}}

                <!-- Tambahkan pilihan bulan sesuai kebutuhan -->
            </select>



            <select name="bulan">
                <option value="">Bulan</option>
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

            <select name="tahun">
                <option value="">Tahun</option>
                @foreach ($thn as $item)
                    <option value="{{ $item->format('Y') }}">{{ $item->format('Y') }}</option>
                @endforeach

                <!-- Tambahkan pilihan bulan sesuai kebutuhan -->
            </select>

            <button class="btn btn-primary mt-1" type="submit">Filter</button>



        </form>



        <div class="card-body">
            <table id="example2" class="table table-bordered table-striped">

                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                            aria-describedby="example1_info">
                            <thead>

                                <tr>
                                    <th>ID</th>
                                    <th>Waktu</th>
                                    <th>Nama</th>
                                    </th>
                                    <th>Menu</th>
                                    </th>
                                    <th>Jumlah Pesanan</th>
                                    </th>
                                    <th>Total Pembayaran</th>
                                    </th>
                                    <th>Status</th>
                                    </th>
                                    <th>Jenis Pesanan</th>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lpmasuk as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->nama_pelanggan }}</td>

                                    <td style="width:20%">
                                        @foreach ($item->detail as $key)
                                            {{ $key->menu->nama_menu . ' x ' . $key->qty }} <br>
                                        @endforeach
                                    </td>
                                    <td>{{ $item->total_pesanan }}</td>
                                    <td>{{ $item->total_pembayaran }}</td>
                                    <td>{{ $item->status_pesanan }}</td>
                                    <td>{{ $item->type_pesanan }}</td>

                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th  ></th>
                                    <th  ></th>
                                    <th  >Total Pemasukan</th>
                                    <th>Rp. {{ number_format($lpmasuk->sum('total_pembayaran')) }}</th>
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
