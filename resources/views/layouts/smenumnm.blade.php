@extends('layouts.main')

@section('isi')
<div class="card card-success">
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
                      <form action="{{ route('updateStatusMenu',$key->id)}}" method="POST">
                        @csrf
                        @method('PUT')

                    <select class="custom-select form-control-border" onchange="this.form.submit()" name="status" id="status">
                        <option {{ $key->status == 'Tersedia' ? 'selected':''}} value="Tersedia" >Tersedia</option>
                        <option {{ $key->status == 'Tidak Tersedia' ? 'selected':''}} value="Tidak Tersedia" >Tidak Tersedia</option>
                      </select>
                    </form>
                  </td>
                  <td class="project-actions text-right">
                     
                      <a type="button" class="btn btn-info btn-sm" href="{{route('editmenu',$key->id)}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit </a>
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
