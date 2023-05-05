@extends('layouts.pemesananmain')

@section('pemesanan.isi')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Formulir Reservasi Di Warung Makan Utami 354</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    {{-- <form action="{{route('insertreservasi')}}" enctype="multipart/form-data" method="POST"> --}}
        <div class="card-body">
                @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Pelanggan</label>
                      <input value="{{old('nama_pelanggan')}}" type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Nama Pelanggan">
                      @error('nama_pelanggan')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
                    <div class="form-group">
                          {{-- {{ $key->no_telepon}} --}}
                          <label for="exampleInputEmail1">No Telepon</label>
                              <input value="{{old('no_telepon')}}" type="number" class="form-control" id="no_telepon" name="no_telepon" placeholder="No Telepon">
                              @error('no_telepon')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                            </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Waktu Reservasi</label>
                              <input value="{{old('waktu')}}" type="date" class="form-control" id="waktu" name="waktu" placeholder="Waktu Reservasi">
                              @error('waktu')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                            </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Menu Pesanan</label>
                        <div class="row">
                        @foreach ( $makan as $key )
                        <div class="col-6">

                        <div class="custom-control custom-checkbox">
                            <div class="row">
                                <div class="col-4 badge bg-secondary mb-1">
                                    {{-- <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1"> --}}
                                    <label for="menuss"  class="">{{ $key->nama_menu }}</label><br>
                                    <img alt="Avatar" id="menuss" class="" style="height: 100px ;width: auto;" src="{{asset('storage/images/'.$key->gambar) }}">
                                    {{-- <br> --}}
                                    {{-- <span class="item-price"> Harga = Rp.{{ $key->harga_menu }}</span> --}}
                                </div>
                                <div class="col-6">
                                    <label for="input-{{ $key->id }}">Jumlah</label>
                                    <input id="input-{{ $key->id }}" type="number" min="0" value="0"  data-price="{{ $key->harga_menu }}" class="form-control item-quantity" placeholder="masukkan jumlah">
                                </div>
                                <div class="col-2">
                                    <label>Harga</label>
                                    {{-- <input type="number" class="form-control" value="{{ $key->harga_menu }}" readonly> --}}
                                    <span class="item-price">   Rp.{{ $key->harga_menu }}</span>
                                </div>
                            </div>
                          </div>
                        </div>

                          @endforeach
                        </div>

                              {{-- <input value="{{old('menu_pesanan')}}" type="text" class="form-control" name="menu_pesanan" placeholder="Menu Pesanan"> --}}
                              @error('menu_pesanan')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
            {{-- <label for="exampleInputEmail1">Total Pesanan</label>
                  <input type="number" value="{{old('total_pesanan')}}" class="form-control" name="harga_menu" placeholder="Total Pesanan">
                  @error('total_pesanan')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror --}}


      </div>
      <div class="form-group">
        <label for="catatan"><p>Catatan  </p></label> <br>
        <textarea name="catatan" class="catatan" id="catatan" cols="100" rows="10"></textarea><br>
        <label for="exampleInputEmail1"><p>Total Pembayaran : Rp. <span id="total"></span></p></label>
            </div>
<div class="form-group">
      <!-- /.card-body -->
      <div class="card-footer">
        <button   id="save-button" class="btn btn-primary">Pesan</button>
      </div>
    {{-- </form> --}}

<!-- /.row -->
</section>
<!-- /.content -->
</div>

@endsection
@push('js')
{{-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script>
        const saveButton = document.getElementById('save-button');

        const inputs = document.querySelectorAll('.item-quantity');
        const prices = document.querySelectorAll('.item-price');
        const totalOutput = document.getElementById('total');

        function updateTotal() {
            let total = 0;
            inputs.forEach((input, index) => {
                const quantity = parseInt(input.value) || 0;
                const price = parseInt(prices[index].textContent.replace('Rp.', '')) || 0;
                total += quantity * price;
            });
            totalOutput.textContent = total;
        }

        inputs.forEach(input => {
            input.addEventListener('input', updateTotal);
        });

        // Update total on page load
        updateTotal();

        saveButton.addEventListener('click', function() {
            const items = {};
            inputs.forEach(input => {
                const id = input.id.replace('input-', '');
                const quantity = input.value;
                items[id] = quantity;
            });
            const catatan = document.getElementById('catatan').value; // get the value of the catatan field
            const no_telepon = document.getElementById('no_telepon').value;
            const nama_pelanggan = document.getElementById('nama_pelanggan').value;
            const waktu = document.getElementById('waktu').value;
            // const no_telepon = document.getElementById('no_telepon').value;
            // get the value of the catatan field
// console.log(items)
                axios.post('/insertreservasi', {
                    items: items,
                    catatan: catatan,
                    no_telepon: no_telepon,
                    nama_pelanggan: nama_pelanggan,
                    waktu: waktu,

                }, {
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    }
                })
                .then(response => {
                console.log('from handle submit', response);
                })
                .catch(error => {
   console.log(error.response)
 });
        });
    </script>
@endpush
