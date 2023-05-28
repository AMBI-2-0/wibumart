@extends('dashboard.main')

@section('content')
    <div class="container">
        <h3>Nama Produk : {{ $product->nama_product }}</h3>
        <h4>
            Gambar : {{ $product->image }} <br>
            Deskripsi : {{ $product->description }}<br>
            Harga : {{ $product->price }}<br>
            Jumlah : {{ $product->jumlah_product }}<br>
            Kategori : {{ $product->kategori_produk }}<br>
        </h4>
    </div>
@endsection