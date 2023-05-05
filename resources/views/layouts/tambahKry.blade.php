@extends('layouts.main')

@section('isi')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Tambah Karyawan Baru </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    <form action="{{route('insertdata')}}" method="POST">
        <div class="card-body">
                @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Lengkap</label>
                      <input value="{{old('name')}}" type="text" class="form-control" name="name" placeholder="name">
                      @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                    </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" value="{{old('password')}}" class="form-control" id="exampleInputPassword1" placeholder="Password">
          @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">No Telpon</label>
                  <input type="number" value="{{old('notelpon')}}" class="form-control" name="notelpon" placeholder="name">
                  @error('notelpon')
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
