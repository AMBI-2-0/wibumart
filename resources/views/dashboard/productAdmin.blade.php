@extends('dashboard.main')

@section('content')

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session()->has('update'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ session('update') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session()->has('delete'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('delete') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    <form action="">
        <div class="d-flex justify-content-start">
        <select class="form-select dropdown-toggle" aria-label="Default select example" style="width: 18rem">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>

        <button type="submit" class="btn btn-outline-dark ms-3"> Filter </button>
    </div>
    <div class="d-flex justify-content-end align-item-center">
        <a href="/dashboard/products/create" class="btn btn-success btn-sm"><i class="fa-solid fa-plus pe-3"></i>Create Product</a>
    </div>

    </form>
    
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Gambar Produk</th>
                    <th scope="col">Deskripsi Produk</th>
                    <th scope="col">Harga Produk</th>
                    <th scope="col">Jumlah Produk</th>
                    <th scope="col">Kategori</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->nama_product }}</td>
                        <td>{{ $product->image }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->jumlah_product }}</td>
                        <td>{{ $product->kategori_produk }}</td>
                        <td>
                            <a href="/dashboard/products/edit/{{ $product->id}}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/dashboard/products/{{ $product->id}}" class="btn btn-primary btn-sm">Detail</a>
                            <form action="/dashboard/products/{{ $product->id}}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
