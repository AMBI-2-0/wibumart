@extends('dashboard.main')

@section('content')
    <div class="container">
        <div class="card mb-3 mt-3 mx-auto" style="max-width: 45rem;">
            <img src="images/{{ $product->image }}" class="card-img-top" alt="gambar">
            <div class="card-body">
                <h4 class="card-title">{{ $product->nama_product }}</h4>
                <div class="card-text">
                    Deskripsi: {{ $product->description }}<br>
                    Harga: {{ $product->price }}<br>
                    Jumlah: {{ $product->jumlah_product }}<br>
                    Kategori: {{ $product->kategori_produk }}<br>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start m-4">
                <a href="/dashboard/products/edit/{{ $product->id }}"class="btn btn-warning btn-sm mb-4 mr-5">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" class="d-inline" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger text-light" onclick="return confirm('Hapus produk ?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
