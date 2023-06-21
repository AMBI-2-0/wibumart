@extends('layouts.master')

<style>
    .carousel-item img {
        transition: transform 0.2s ease-in-out;
        border-radius: 20px;
    }
</style>

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @for ($i = 0; $i < min(3, ceil(count($products) / 3)); $i++)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i }}"
                {{ $i === 0 ? 'class=active' : '' }} aria-current="true" aria-label="Slide {{ $i + 1 }}"></button>
        @endfor
    </div>
    <div class="carousel-inner">
        @for ($i = 0; $i < min(3, ceil(count($products) / 3)); $i++)
            <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                <div class="container-fluid">
                    <div class="row">
                        @php
                            $startIndex = $i * 3;
                            $endIndex = min($startIndex + 3, count($products));
                        @endphp
                        @for ($j = $startIndex; $j < $endIndex; $j++)
                            <div class="col bg-image hover-zoom">
                                <a href="{{ url('order') }}/{{ $products[$j]->id }}">
                                    <img src="{{ $products[$j]->image == null ? asset('images/caro-item-1.png') : asset('storage/' . $products[$j]->image) }}"
                                        class="d-block w-100 object-fit:cover" alt="...">
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        @endfor
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>




    <h2 class="text-white mt-5">Produk Kami</h2>

    <div class="container-fluid">
        <div class="row">

            @foreach ($products as $product)
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-product bg-dark text-white border-0">
                    <img src="{{ $product->image == null ? '/images/caro-item-1.png' : asset('storage/' . $product->image) }}"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class='card-title'>
                            {{ \Illuminate\Support\Str::limit($product->nama_product, 45, '...') }}
                        </h5>
                        <p class='card-text'>
                            <strong>Harga : </strong> IDR {{ number_format($product->price) }} <br>
                            <strong>Stok :</strong> {{ $product->jumlah_product }} <br>
                            <strong>Kategori : </strong> {{ $product->kategori->kategori }} <br>
                            <hr>
                            <strong>Deskripsi : </strong> <br>
                            {{ \Illuminate\Support\Str::limit($product->description, 105, '...') }}
                        </p>
                        <a href="{{ url('order') }}/{{ $product->id }}" class="btn btn-light"><i
                                class="fa fa-shopping-cart"></i> Beli</a>
                    </div>
                </div>
            </div>
            
            @endforeach
        </div>

        <div class="pagination-container mt-4">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item {{ $products->previousPageUrl() ? '' : 'disabled' }} me-5">
                        <a class="page-link" href="{{ $products->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Sebelumnya</span>
                        </a>
                    </li>

                    <li class="page-item {{ $products->nextPageUrl() ? '' : 'disabled' }} ms-5">
                        <a class="page-link" href="{{ $products->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Selanjutnya</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
@endsection
