@extends('layouts.main')

@section('isi')
<div class="card-header">
    <h3 class="card-title">Daftar Stok Menu Makanan Warung Makan Utami 354</h3>
    <div class="card-tools">
      <td>
            <a href="/tambahsmenumkn" type="button" class="btn btn-block btn-primary">Tambah Menu</a>
             </td>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      {{-- <h3 class="card-title">Projects</h3> --}}

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
                      Nama Makanan
                  </th>
                  <th style="width: 30%">
                      Gambar Makanan
                  </th>
                  <th style="width: 30%">
                      Harga Makanan
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
            $no=1;
        @endphp
            @foreach ( $menumkn as $key )

              <tr>
                  <td>
                    {{$no++}}
                  </td>
                  <td>
                      <a>
                          {{ $key->nama_menu}}
                      </a>

                  </td>
                  <td>
                      <ul class="list-inline" >
                          <li class="list-inline-item">
                              <img alt="Avatar" class="" style="height: 100px ;width: auto;" src="{{asset('storage/images/'.$key->gambar) }}">
                          </li>
                          {{-- <li class="list-inline-item">
                              <img alt="Avatar" class="table-avatar" src="{{asset('AdminLTE/dist')}}/img/avatar2.png">
                          </li>
                          <li class="list-inline-item">
                              <img alt="Avatar" class="table-avatar" src="{{asset('AdminLTE/dist')}}/img/avatar3.png">
                          </li>
                          <li class="list-inline-item">
                              <img alt="Avatar" class="table-avatar" src="{{asset('AdminLTE/dist')}}/img/avatar4.png">
                          </li> --}}
                      </ul>
                  </td>
                  <td class="project_progress">

                      </div>
                      <small>
                          {{ $key->harga_menu}}
                      </small>
                  </td>

                  <td>
                    {{ $key->status }}
                  </td>
                  {{-- <td class="project-state">
                      <span class="badge badge-success">Success</span>
                  </td> --}}
                  <td class="project-actions text-right">
                      <a class="btn btn-primary btn-sm" href="#">
                          <i class="fas fa-folder">
                          </i>
                          View
                      </a>
                      <a type="button" class="btn btn-info btn-sm" href="{{route('editmenu',$key->id)}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edittttt
                      <a class="btn btn-danger btn-sm" href="{{route('deletemenu',$key->id)}}">
                          <i class="fas fa-trash">
                          </i>
                          Delete
                      </a>
                  </td>
              </tr>
              @endforeach

              {{-- @include('layouts.modal-edit') --}}
          </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>


            </div>
        </div>

        </div>
        </div>
        <div class="modal fade" id="editmakan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
@endsection
