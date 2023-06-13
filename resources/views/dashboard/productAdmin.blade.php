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


    <form action="/dashboard/products/{{ $selectedCategoryId }}">
        <div class="row">
            <div class="col-3 me-5">
                <select class="form-select dropdown-toggle" aria-label="Default select example" style="width: 18rem"
                    name="kategori">
                    <option selected>Pilih Kategori</option>
                    @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->id }}" {{ $kategori->id == $selectedCategoryId ? 'selected' : '' }}>
                            {{ $kategori->kategori }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-1">
                <button type="submit" class="btn btn-outline-dark"> Filter</button>
            </div>
            <div class="col-2">
                <a href="/dashboard/products" class="btn btn-outline-dark ">Reset Filter</a>
            </div>
        </div>
    </form>

    <div class="d-flex justify-content-end align-item-center">
        <a href="/dashboard/products/create" class="btn btn-success btn-sm"><i class="fa-solid fa-plus pe-3"></i>Buat Produk</a>
    </div>

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
                        <td>@php
                            $gambar = $product->image;
                        @endphp
                        <img src="{{ asset('storage/'.$product->image) }}" alt="" class="img-fluid rounded-circle"
                            style="width: 50px; height: 50px;"></td>
                        <td>
                            {{ strlen($product->description) > 30 ? substr($product->description, 0, 30). '...' : $product->description }}
                        </td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->jumlah_product }}</td>
                        <td>{{ $product->kategori->kategori }}</td>
                        <td>
                            <div class="row ms-1 mt-2 me-1">
                                <a href="/dashboard/products/edit/{{ $product->id }}"
                                    class="btn btn-warning btn-sm">Edit</a>
                            </div>
                            <div class="row ms-1 mt-2 me-1">
                                <a href="/dashboard/products/detail/{{ $product->id }}" class="btn btn-primary btn-sm">Detail</a>
                            </div>
                            <div class="row ms-1 mt-2 me-1">
                                <form action="/dashboard/products/{{ $product->id }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apa Anda Yakin?')">Hapus</button>
                                </form>
                            </div>
                            </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
