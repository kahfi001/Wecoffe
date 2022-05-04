@extends('layout.main')

@section('konten')

   <!-- Banner -->
   <div class="banner" style="height: 400px">
    <div class="container h-100">
      <div class="row align-items-center h-100">
        <div class="col">
          <h1 class="text-uppercase">Keranjang</h1>
        </div>
        <div class="col">
          <div class="container"></div>
        </div>
      </div>
    </div>
  </div>

  @if ($cartId == '')
    <div class="container my-4 text-center">
        <h3>Tidak Ada Data</h3>
    </div>
  @else
  
    <div class="container-md content-whistlist">
        <table class="table">
          <thead class="table-whistlist">
            <tr>
              <th scope="col"></th>
              <th scope="col">Produk</th>
              <th scope="col">Nama Produk</th>
              <th scope="col">Qty</th>
              <th scope="col">Harga</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($carts as $item)   
              <tr>
                <th style="vertical-align: middle; width: 5%" scope="row">
                  <form action="/cart" method="POST">
                    @csrf
                    <input type="hidden" name="cartId" value="{{ $cartId }}">
                    <button onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn-close" aria-label="Close"></button>
                  </form>
                </th>
                <td style="width: 25%; vertical-align: middle">
                  <img src="{{ asset('storage/foto-produk/'. $item->gambar) }}" width="100px" alt="" />
                </td>
                <td class="fw-bold text-uppercase" style="vertical-align: middle">{{ $item->nama }}</td>
                <td style="vertical-align: middle">{{ $item->qty }}</td>
                <td style="vertical-align: middle">@currency($item->harga)</td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
              <tr>
                  <td colspan="4" class="fw-bold">Total</td>
                  <td class="fw-bold">@currency($total)</td>
              </tr>
          </tfoot>
        </table>
    
        <form action="/checkout-carts" method="POST">
          @csrf
          <input type="hidden" name="idUser" id="idUser" value="{{ auth()->user()->id }}">
          <input type="hidden" name="username" id="username" value="{{ auth()->user()->username }}">
          <input type="hidden" name="total" id="total" value="{{ $total }}">
          <div class="text-end">
            <button type="submit" class="btn search-btn fw-bold text-uppercase">Checkout Semua</button>
          </div>
        </form>
    </div>
  
  @endif

@endsection