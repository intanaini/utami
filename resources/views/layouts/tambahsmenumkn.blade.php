@extends('layouts.main')

@section('isi')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Tambah Menu Makanan Baru </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    <form action="{{route('insertmenumkn')}}" enctype="multipart/form-data" method="POST">
        <div class="card-body">
                @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Makanan</label>
                      <input value="{{old('nama_menu')}}" type="text" class="form-control" name="nama_menu" placeholder="Nama Makanan">
                      @error('nama_menu')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                    </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Gambar Makanan</label>
          <input type="file" name="gambar" value="{{old('gambar')}}" class="form-control" id="exampleInputEmail1" placeholder="Gambar Makanan">
          @error('gambar')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Harga Makanan</label>
                  <input type="number" value="{{old('harga_menu')}}" class="form-control" name="harga_menu" placeholder="Harga makanan">
                  @error('harga_menu')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

                </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
    </form>

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
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
@endsection
