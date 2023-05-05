@extends('layouts.pemesananmain')

@section('pemesanan.isi')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Menu Di Warung Makan Utami 354</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    {{-- <form action="{{route('insertreservasi')}}" enctype="multipart/form-data" method="POST"> --}}
        <div class="card-body">
            {{-- @foreach ($pesanan as $key ) --}}
                {{-- @csrf --}}
                    <div class="form-group">
                        <form action="/order" method="post">
                            @csrf
                            <label for="product_name">Nama Barang</label>
                            <input type="text" name="product_name" id="product_name">
                            <label for="quantity">Jumlah</label>
                            <input type="number" name="quantity" id="quantity">
                            <button type="submit">Pesan</button>
                        </form>
                        <label for="exampleInputEmail1">Menu Pesanan</label>
                        @foreach ($pesanan as $key )

                        <div class="custom-control custom-checkbox my-3">
                            <div class="row">
                                {{-- <div class="col-2">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                    <label for="customCheckbox1" class="custom-control-label">Gambar</label>
                                </div> --}}
                                <div class="col-2">
                                    <img alt="Avatar" class="" style="height: 100px ;width: auto;" src="{{asset('storage/images/'.$key->gambar) }}">

                                </div>
                                <div class="col-2">
                                    <label>{{ $key->nama_menu }}</label>
                                </div>
                                <div class="col-2">
                                    <label for="input-{{ $key->id }}">Jumlah</label>
                                    <input type="number" min="0" value="0" class="item-quantity form-control" id="input-{{ $key->id }}"
                                    data-price="{{ $key->harga_menu }}" >
                                </div>
                                <div class="col-2">
                                    <label>Harga</label>
                                    <input type="number" class="form-control" value="{{$key->harga_menu}}" readonly>
                                </div>
                            </div>
                          </div>
                          @endforeach




                              {{-- <input value="{{old('menu_pesanan')}}" type="text" class="form-control" name="menu_pesanan" placeholder="Menu Pesanan"> --}}
                              {{-- @error('menu_pesanan')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror --}}
                          <div class="form-group">
                            <div class="col-6">
                                <label for="exampleInputEmail1">Catatan</label>
                                <input type="text"  name="catatan" class="catatan" id="catatan"  class="form-control"   placeholder="Masukkan Catatan">
                                @error('catatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
      <div class="form-group">
        <div class="col-6">
            <label for="exampleInputEmail1">Total Pembayaran</label>
            <p>Rp. <span id="total"></span></p>
        </div>
            </div>
             {{-- <span> {{ $key->nama_menu}} </span> <br>
 <span style="font-size:10px">

     {{ 'Rp '.number_format($key->harga_menu)}}
 </span>

     {{ $key->status}}
 </span>
 </div>
</div>
 @endforeach --}}
<div class="form-group">
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" id="save-button" class="btn btn-primary">Pesan</button>
      </div>
    {{-- </form> --}}

<!-- /.row -->
{{-- </section> --}}
<!-- /.content -->
</div>

@endsection
@push('js')

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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
        axios.post('{{ route('simpan-psn') }}', {
                items: items,
                catatan: catatan // include the catatan field in the data payload
            })
            .then(response => {
                alert('Total saved!');
            })
            .catch(error => {
                alert('Error saving total!');
            });
    });
</script>
@endpush
