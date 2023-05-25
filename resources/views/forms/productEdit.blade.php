@extends('dashboard.main')

@section('content')

    <body class="body ">
        <div class="d-flex justify-content-center align-items-center mt-5 pt-5 ">

            <form class="border border-5 border-dark p-5" style="border-radius:15px" action="/dashboard/products/edit/{{ $product->id }}}" method="post">
                @method('put')
                @csrf

                <div class="row mb-3">
                    <label for="nama_product" class="form-label ">Nama Produk :</label>
                    <input type="text" name="nama_product" id="nama_product"
                        class="form-control @error('nama_product') is-invalid @enderror"
                        value="{{ old('nama_product', $product->nama_product) }}" />
                    @error('nama_product')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="gambar_product" class="form-label">Gambar Produk :</label>
                    <input class="form-control" type="file" id="gambar_product" name="gambar_product"
                        class="form-control @error('gambar_product') is-invalid @enderror" value="" />
                    @error('gambar_product')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="description" class="form-label"> Deskripsi Produk :</label>
                    <textarea type="text" name="description" id="description"
                        class="form-control @error('description') is-invalid @enderror" value="">{{ old('description', $product->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="price" class="form-label">Harga Produk :</label>
                    <input type="number" name="price" id="price"
                        class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $product->price) }}" />
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="jumlah_product" class="form-label">Jumlah Produk :</label>
                    <input type="number" name="jumlah_product" id="jumlah_product"
                        class="form-control @error('jumlah_product') is-invalid @enderror" value="{{ old('jumlah_product', $product->jumlah_product) }}" />
                    @error('jumlah_product')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="kategori_id" class="form-label">Kategori Produk :</label>
                    <select class="form-select" aria-label="Default select example" name="kategori_id">
                        <option selected>
                            {{ old('kategori_id', $product->kategori->kategori) }}
                        </option>
                        @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->id }}">
                            {{ $kategori->kategori }}
                        </option>
                    @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-outline-warning">Edit</button>

            </form>

        </div>
    @endsection
