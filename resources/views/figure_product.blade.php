@extends('layouts.master')

@section('style')
    <style>
        .hero {
            background-repeat: no-repeat;
            background-size: cover;
            height: 80vh;
        }

        .hero-title {
            font-size: 4rem;
            margin-bottom: 30px;
            color: #fff;
        }

        .hero-description {
            font-size: 1.5rem;
            margin-bottom: 30px;
            color: #fff;
        }

        .hero-button {
            font-size: 1.5rem;
            padding: 10px 30px;
            border-radius: 50px;
        }

        .hero-image {
            width: 80%;
            height: auto;
        }

        .carousel-item img {
            transition: transform 0.2s ease-in-out;
            border-radius: 20px;
        }

        .btn-primary.hero-button {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, transform 0.2s ease-in-out;
        }

        .btn-primary.hero-button:hover {
            background-color: #0056b3;
            border-color: #0056b3;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
            transform: scale(1.1);
        }
    </style>
@endsection

@section('carousel')
@endsection

@section('content')
    <section class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="hero-title">Temukan Figura yang sempurna</h1>
                    <p class="hero-description">Jelajahi koleksi figur berkualitas tinggi kami untuk ditambahkan ke koleksi Anda
                        Hari ini.</p>
                    <a href="#" class="btn btn-primary hero-button">Toko</a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/figure-hero.png') }}" alt="Figure Hero Image" class="hero-image img-fluid" style=" max-width:503px; max-height:503px; object-fit:cover">
                </div>
            </div>
        </div>
    </section>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @for ($i = 0; $i < min(3, ceil(count($figures) / 3)); $i++)
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i }}"
                    {{ $i === 0 ? 'class=active' : '' }} aria-current="true" aria-label="Slide {{ $i + 1 }}"></button>
            @endfor
        </div>
        <div class="carousel-inner">
            @for ($i = 0; $i < min(3, ceil(count($figures) / 3)); $i++)
                <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                    <div class="container-fluid">
                        <div class="row">
                            @php
                                $startIndex = $i * 3;
                                $endIndex = min($startIndex + 3, count($figures));
                            @endphp
                            @for ($j = $startIndex; $j < $endIndex; $j++)
                                <div class="col bg-image hover-zoom">
                                    <a href="{{ url('order') }}/{{ $figures[$j]?->id }}">
                                        <img src="{{ $figures[$j]?->image ? asset('storage/' . $figures[$j]->image) : asset('images/caro-item-1.png') }}"
                                            class="d-block w-100 img-fluid" style="width:300; height:300; object-fit:cover;" alt="...">
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
    <h2 class="text-white mt-5">Figura</h2>
    <div class="container-fluid">
        <div class="row">

            @if ($figures !== null)
                @foreach ($figures as $figure)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="card card-product bg-dark text-white border-0">
                        <img src="{{ $figure->image==null ? "/images/caro-item-1.png" : asset('storage/'.$figure->image) }}" class="card-img-top img-fluid" style="object-fit: cover; width: 100%; height: 300" alt="...">
                        <div class="card-body">
                            <h5 class='card-title'>{{ \Illuminate\Support\Str::limit($figure->nama_product, 45, '...') }}</h5>
                            <p class='card-text'>
                                <strong>Harga : </strong> IDR {{ number_format($figure->price) }} <br>
                                <strong>Stok :</strong> {{ $figure->jumlah_product }} <br>
                                <strong>Kategori : </strong> {{ $figure->kategori->kategori }} <br>
                                <hr>
                                <strong>Deskripsi : </strong> <br>
                                {{ \Illuminate\Support\Str::limit($figure->description, 105, '...') }}
                            </p>
                            <a href="{{ url('order') }}/{{ $figure->id }}" class="btn btn-light"><i
                                    class="fa fa-shopping-cart"></i> Beli</a>
                        </div>
                    </div>
                </div>
            @endforeach
            @endif

            

            <div class="pagination-container mt-4">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        
                        @if ($figures !== null)
                            <li class="page-item {{ $figures->previousPageUrl() ? '' : 'disabled' }} me-5">
                            <a class="page-link" href="{{ $figures->previousPageUrl() ?? '#' }}" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Sebelumnya</span>
                            </a>
                        </li>
            
                        <li class="page-item {{ $figures->nextPageUrl() ? '' : 'disabled' }} ms-5">
                            <a class="page-link" href="{{ $figures->nextPageUrl() ?? '#' }}" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Selanjutnya</span>
                            </a>
                        </li>
                        @endif
                        
                    </ul>
                </nav>
            </div>
            
            

        </div>

    </div>
@endsection
