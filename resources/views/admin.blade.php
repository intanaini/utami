@extends('layouts.main')

@section('isi')
<div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">Daftar Karyawan Warung Utami 354</h3>

      <div class="card-tools">
        <td>
            {{-- <a href="/TambahKry" class="nav-link active"> --}}
                <a href="/tambahkry"   type="button" class="btn btn-block btn-primary">Tambah Karyawan</a>
            </td>
      </div>
    </div>
{{-- <div class="card-header">
    <h3 class="card-title">Daftar Karyawan</h3>
    <div class="card-tools">
      <td> --}}
        {{-- <a href="/TambahKry" class="nav-link active"> --}}
            {{-- <a href="/tambahkry"   type="button" class="btn btn-block btn-primary">Tambah Karyawan</a>
        </td>
    </div>

  </div> --}}
  <div class="card">
    <div class="card-header">

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped projects">
          <thead>
              <tr>
                  <th style="width: 1%">
                      No
                  </th>
                  <th style="width: 20%">
                      Nama Karyawan
                  </th>
                  <th style="width: 30%">
                      No Telepon
                  </th>
                  <th style="width: 30%">
                    Status
                </th>
                  <th style="width: 30%">
                      Aksi
                  </th>



              </tr>
          </thead>
          <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($data as $dt)

              <tr>
                  <td>
                    {{ $no++ }}
                  </td>
                  <td>
                      {{$dt->name}}
                  </td>
                  <td>
                    {{$dt->notelpon}}
                  </td>

                  <td>
                    {{ $dt->role }}

                    {{-- <form action="{{ route('updateuser',$dt->id)}}" method="POST">
                        @csrf
                        @method('PUT')

                    <select class="custom-select form-control-border" onchange="this.form.submit()" name="role" id="role">
                        <option {{ $dt->role == 'admin' ? 'selected':''}} value="Admin" >admin</option>
                        <option {{ $dt->role == 'karyawa' ? 'selected':''}} value="Karyawan" >karyawan</option>
                      </select>
                    </form> --}}
                  </td>

                  {{-- <td class="project-actions">
                      <a class="btn btn-primary btn-sm" href="#">
                          <i class="fas fa-folder">
                          </i>
                          View
                      </a>
                        <a class="btn btn-info btn-sm" href="{{route('edituser',$dt->id)}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit </a>
                      <a class="btn btn-danger btn-sm" href="{{route('deleteuser',$dt->id)}}">
                        <i class="fas fa-trash">
                          </i>
                          Delete
                      </a>
                  </td> --}}
                  <td class="project-actions ">
                    <a class="btn btn-info btn-sm" href="{{route('edituser',$dt->id)}}">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                        </a>
                    <a class="btn btn-danger btn-sm" href="{{route('deleteuser',$dt->id)}}">
                        <i class="fas fa-trash">
                        </i>
                        Delete
                    </a>
                </td>
              </tr>

            @endforeach
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  @include('layouts.modal-kry')

@endsection
