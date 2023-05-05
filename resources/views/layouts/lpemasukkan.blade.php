@extends('layouts.main')

@section('isi')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Daftar Laporan Pemasukan Warung Makan Utami 354</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6">
          <div class="dt-buttons btn-group flex-wrap">
                  </div> </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter">
                      <label>Cari:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div>
                      <div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
        <thead>
        <tr><th class="sorting sorting_desc" tabindex="0" aria-controls="example1" rowspan="1"
      colspan="1" aria-label="Rendering engine: activate to sort column ascending"
      aria-sort="descending">Jam</th><th class="sorting" tabindex="0"
      aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tanggal</th><th class="sorting" tabindex="0"
      aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Total Pemasukan</th></th></tr>
        </thead>
        <tbody>
        <tr class="odd">
          <td class="dtr-control sorting_1" tabindex="0">10.00</td>
          <td class="">01-06-2023</td>
          <td>70.000</td>
        </tr><tr class="even">
          <td class="dtr-control sorting_1" tabindex="0">10.20</td>
          <td class="">01-06-2023</td>
          <td>89.000</td>
        </tr><tr class="odd">
          <td class="dtr-control sorting_1" tabindex="0">10.35</td>
          <td class="">01-06-2023</td>
          <td>120.000</td>
        </tr><tr class="even">
          <td class="dtr-control sorting_1" tabindex="0">11.000</td>
          <td class="">01-06-1023</td>
          <td>45.000</td>
        </tr></tbody>
        <tfoot>
        <tr><th rowspan="1" colspan="1">Jam</th><th rowspan="1" colspan="1">Tanggal</th><th rowspan="1" colspan="1">Total Pemasukan</th>
        </tfoot>
      </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
    </div>
    <!-- /.card-body -->
  </div>
@endsection
