@extends('layouts.main')

@section('isi')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit Menu </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    <form action="{{route('updatemenumkn')}}" enctype="multipart/form-data" method="POST">
        <div class="card-body">
                @csrf
                <input type="hidden" name="id" value="{{$menu->id}}">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Makanan</label>
                      <input type="text" class="form-control" name="nama_menu" value="{{$menu->nama_menu}}">
                      @error('nama_menu')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                    </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Gambar Makanan</label>
          <input type="file" name="gambar" class="form-control" id="exampleInputEmail1" placeholder="Gambar Makanan">
          @error('gambar')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Harga Makanan</label>
                  <input type="number" value="{{$menu->harga_menu}}" class="form-control" name="harga_menu" placeholder="Harga makanan">
                  @error('harga_menu')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

                </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Tipe</label>
        {{-- <div class="row"> --}}
            {{-- <div class="col-4"> --}}
        {{-- <input type="text" value="{{$menu->type_menu}}" class="form-control" name="type_menu" placeholder="type menu"> --}}
            {{-- </div> --}}
            <div class="col">
                <select name="type" >
                    <option {{ $menu->type_menu == 'Minuman'? 'selected':''}} value="Minuman"> Minuman</option>
                    <option {{ $menu->type_menu == 'Makanan'? 'selected':''}} value="Makanan"> Makanan</option>
                  </select>
            </div>
        {{-- </div> --}}


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
