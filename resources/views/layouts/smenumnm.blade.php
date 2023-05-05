@extends('layouts.main')

@section('isi')
<div class="card-header">
    <h3 class="card-title">Daftar Stok Menu Minuman Warung Makan Utami 354</h3>
    <div class="card-tools">
      <td>
            <a href="/tambahsmenumnm" type="button" class="btn btn-block btn-primary">Tambah Menu</a>
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
                      Nama Minuman
                  </th>
                  <th style="width: 30%">
                      Gambar Minuman
                  </th>
                  <th style="width: 30%">
                      Harga Minuman
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
                  <td class="project-actions text-right">
                      <a class="btn btn-primary btn-sm" href="#">
                          <i class="fas fa-folder">
                          </i>
                          View
                      </a>
                      <a class="btn btn-info btn-sm" href="#">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                      </a>
                      <a class="btn btn-danger btn-sm" href="{{route('deletemenu',$key->id)}}">
                          <i class="fas fa-trash">
                          </i>
                          Delete
                      </a>
                  </td>
              </tr>
              @endforeach


          </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

              <div>

                </div>
            </div>
        </div>

        </div>
        </div>

@endsection
