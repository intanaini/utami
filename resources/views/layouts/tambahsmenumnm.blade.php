@extends('layouts.main')

@section('isi')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Tambah Menu Minuman Baru </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    <form action="{{route('insertmenumnm')}}" enctype="multipart/form-data" method="POST">
        <div class="card-body">
                @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Minuman</label>
                      <input value="{{old('nama_menu')}}" type="text" class="form-control" name="nama_menu" placeholder="Nama Minuman">
                      @error('nama_menu')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                    </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Gambar Minuman</label>
          <input type="file" name="gambar" value="{{old('gambar')}}" class="form-control" id="exampleInputEmail1" placeholder="Gambar Minuman">
          @error('gambar')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Harga Minuman</label>
                  <input type="number" value="{{old('harga_menu')}}" class="form-control" name="harga_menu" placeholder="Harga Minuman">
                  @error('harga_menu')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

                </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
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
