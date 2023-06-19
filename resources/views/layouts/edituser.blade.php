@extends('layouts.main')

@section('isi')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit Karyawan Baru </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    <form action="{{route('updateuser',$data->id)}}" method="POST">
        <div class="card-body">
                @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Lengkap</label>
                      <input value="{{$data->name}}" type="text" class="form-control" name="name" placeholder="name">
                      @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                    </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" value="{{$data->email}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
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
                  <input type="number" value="{{$data->notelpon}}" class="form-control" name="notelpon" placeholder="name">
                  @error('notelpon')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Jabatan</label>
                    {{-- <div class="row"> --}}
                        {{-- <div class="col-4"> --}}
                    {{-- <input type="text" value="{{$menu->type_menu}}" class="form-control" name="type_menu" placeholder="type menu"> --}}
                        {{-- </div> --}}
                        <div class="col">
                            <select name="role" >
                                <option {{ $data->role == 'admin'? 'selected':''}} value="admin"> Admin</option>
                                <option {{ $data->role == 'karyawan'? 'selected':''}} value="karyawan"> Karyawan</option>
                              </select>
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
