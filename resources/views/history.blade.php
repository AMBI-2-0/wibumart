<!-- history.blade.php -->

@extends('layouts.master')

@section('content')
  <div class="container">
    <h1 class="text-white">Riwayat Pembelian</h1>
    
    @foreach ($cartItems as $item)
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ $item->products->image }}" alt="Product Image" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->products->nama_product }}</h5>
                        <p class="card-text">Harga: {{ $item->products->price }}</p>
                        <p class="card-text">tanggal pemesanan: {{ $item->created_at->format('d/m/y') }}</p>
                        <p class="card-text">Status: <span class="badge badge-primary text-black">Selesai</span></p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="text-center">
        <a href="/home" class="btn btn-primary">Lanjutkan Ke Beranda</a>
    </div>
</div>
@endsection