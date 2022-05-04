@extends('layout.main')

@section('konten')
    <!-- Banner -->
    <div class="banner" style="height: 400px">
      <div class="container h-100">
        <div class="row align-items-center h-100">
          <div class="col">
            <h1 class="text-uppercase">Checkout</h1>
          </div>
          <div class="col">
            <div class="container"></div>
          </div>
        </div>
      </div>
    </div>

    {{-- Produk item --}}
    <div class="container py-3">
        <div class="h4">Produk yang di Checkout</div>
        <table class="table">
            <thead class="table-whistlist">
              <tr>
                <th scope="col">Produk</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Qty</th>
                <th scope="col">Harga</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dataCheckout as $item)   
                <tr>
                  <td style="width: 25%; vertical-align: middle">
                    <img src="{{ asset('storage/foto-produk/'. $item->gambar) }}" width="100px" alt="" />
                  </td>
                  <td class="fw-bold text-uppercase" style="vertical-align: middle">{{ $item->nama_produk }}</td>
                  <td style="vertical-align: middle">{{ $item->qty }}</td>
                  <td style="vertical-align: middle">@currency($item->harga)</td>
                </tr>
              @endforeach
            </tbody>
          </table>
          <hr class="mt-4">
    </div>

    @include('components.form-checkout')
   
    
@endsection