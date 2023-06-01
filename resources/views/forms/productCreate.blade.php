@extends('dashboard.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Product</div>
                    <div class="card-body">
                        <form method="POST" action="/dashboard/products/create" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="nama_product" class="form-label">Nama Produk:</label>
                                <input type="text" name="nama_product" id="nama_product"
                                       class="form-control @error('nama_product') is-invalid @enderror"
                                       value="{{ old('nama_product') }}">
                                @error('nama_product')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Gambar Produk:</label>
                                <input class="form-control @error('image') is-invalid @enderror"
                                       type="file" id="image" name="image">
                                @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Deskripsi Produk:</label>
                                <textarea name="description" id="description"
                                          class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                                @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">Harga Produk:</label>
                                <input type="number" name="price" id="price"
                                       class="form-control @error('price') is-invalid @enderror"
                                       value="{{ old('price') }}">
                                @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="jumlah_product" class="form-label">Jumlah Produk:</label>
                                <input type="number" name="jumlah_product" id="jumlah_product"
                                       class="form-control @error('jumlah_product') is-invalid @enderror"
                                       value="{{ old('jumlah_product') }}">
                                @error('jumlah_product')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="kategori_id" class="form-label">Kategori Produk:</label>
                                <select class="form-select" aria-label="Default select example" name="kategori_id">
                                    <option selected disabled>Pilih Kategori</option>
                                    @foreach ($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
                                    @endforeach
                                </select>
                                @error('kategori_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
