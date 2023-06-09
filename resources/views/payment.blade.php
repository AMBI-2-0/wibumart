@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="py-5 text-center">
            <div class="jumbotron text-center">
                <h1 class="display-4 text-white">Terimakasih Sudah Berbelanja</h1>
            </div>
        </div>
    </div>

    @if ($user)
        <table class="table table-hover">
            <tbody class="text-white">
                <tr>
                    <td>Date</td>
                    <td>{{ $cartItems[0]->created_at->format('d/m/y') }}</td>
                </tr>
                <tr>
                    <td>Nama Kustomer</td>
                    <td>{{ $user->nama }}</td>
                </tr>
                <tr>
                    <td>Alamat Kustomer</td>
                    <td>{{ $user->alamat }}</td>
                </tr>
                <tr>
                    <td>Metode Pembayaran</td>
                    <td>Dompet Wibumart Sejahterah: Rp.{{ number_format($dompetDigital, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <td>Total Harga</td>
                    <td>IDR {{ number_format($totalPrice) }}</td>
                </tr>
            </tbody>
        </table>
    @endif

    <h1 class="card-title text-white">Pesanan</h1>
    @foreach($cartItems as $item)
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-2">
                    <img src="{{ $item->products->image == null ? '/images/caro-item-1.png' : asset('storage/' . $item->products->image) }}" alt="gambar error" style="object-fit: cover; width: 100%; height: 200" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <div class="position-absolute mt-2" style="top:0;right:1%;">
                    X {{$item->prod_qty}}
                    </div>
                    <div class="card-body">
                        <p class="card-text"><span class="fw-bold">Nama Produk:</span> {{ $item->products->nama_product }}</p>
                        <p class="card-text"><span class="fw-bold">Deskripsi Produk:</span> {{ $item->products->description }}</p>
                        <p class="card-text"><span class="fw-bold">Harga:</span> {{ $item->products->price }} {{$item->prod_qty}}</p>
                    </div>
                    
                </div>
            </div>
        </div>
    @endforeach

    <div class="text-center">
        <a href="{{ route('history') }}" class="btn btn-primary">Lihat Riwayat Belanja</a>
    </div>
</div>
@endsection