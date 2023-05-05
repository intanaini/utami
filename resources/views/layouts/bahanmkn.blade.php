@extends('layouts.main')

@section('isi')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Bahan Makanan</h3>
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 200x;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
                <td>
                  {{-- <a href="" class="nav-link active"> --}}
              <a href="/tambahbhnmkn" class="btn btn-block btn-primary">Tambah Bahan</a>
               </td>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>Nama Bahan</th>
                <th>Total Bahan</th>
                <th>Sub Total</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($makanan as $key )
              <tr>

                <td>{{ $key->namabahan }}</td>
                <td>{{ $key->totalbahan }} kg</td>
                <td>{{ $key->subtotal }}</td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

</section>
<!-- /.content -->
</div>

<!-- /.content-wrapper -->
<footer class="main-footer">

</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>



@endsection
