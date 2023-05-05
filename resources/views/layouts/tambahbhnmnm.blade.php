@extends('layouts.main')

@section('isi')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Tambah Menu Minuman Baru </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

        <div class="card-body">
            <form action="{{route('insertbhnmmnm')}}" method="post">
                @csrf
            <div class="form-group">
                <label for="">Nama Bahan</label>
                      <input type="text" value="{{old('namabahan')}}" class="form-control" name="namabahan" placeholder="nama bahan">
                  @error('namabahan')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                     @enderror

                </div>
        <div class="form-group">
          <label for="">Total Bahan</label>
          <input type="number" value="{{old('totalbahan')}}" class="form-control" name="totalbahan" placeholder="total bahan">
                  @error('totalbahan')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
        <div class="form-group">
          <label for="">Sub Total</label>
          <input type="number" value="{{old('subtotal')}}" class="form-control" name="subtotal" placeholder="sub total">
                  @error('subtotal')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
        </div>
        {{-- <div class="form-group">
            <label for="exampleInputEmail1">No Telpon</label>
                  <input type="number" class="form-control" name="notelpon" placeholder="name">
                  <div class="input-group-append">
                    <div class="input-group-text">
                    </div>
                  </div>
                </div>
      </div> --}}
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>

<!-- /.row -->
</section>
<!-- /.content -->
</div>

@endsection
