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
                    <h1 class="hero-title">Unleash Your Imagination with Spectacular Props!</h1>
                    <p class="hero-description">Step into a world of creativity and wonder with our extraordinary collection of props.</p>
                    <a href="#" class="btn btn-primary hero-button">Shop Now</a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/figure-hero.png') }}" alt="Figure Hero Image" class="hero-image">
                </div>
            </div>
        </div>
    </section>

    <div id="carouselProduct" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselProduct" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselProduct" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselProduct" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col bg-image hover-zoom">
                            <img src="{{ asset('images/caro-item-1.png') }}" class="d-block w-100 img-fluid" alt="...">
                        </div>
                        <div class="col bg-image hover-zoom">
                            <img src="{{ asset('images/caro-item-2.png') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="col bg-image hover-zoom">
                            <img src="{{ asset('images/caro-item-3.png') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col bg-image hover-zoom">
                            <img src="{{ asset('images/caro-item-4.png') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="col bg-image hover-zoom">
                            <img src="{{ asset('images/caro-item-5.png') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="col bg-image hover-zoom">
                            <img src="{{ asset('images/caro-item-6.png') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col bg-image hover-zoom">
                            <img src="{{ asset('images/caro-item-6.png') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="col bg-image hover-zoom">
                            <img src="{{ asset('images/caro-item-3.png') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="col bg-image hover-zoom">
                            <img src="{{ asset('images/caro-item-4.png') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselProduct" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselProduct" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <h2 class="text-white mt-5">Props</h2>
    <div class="container-fluid">
        <div class="row">
            @foreach ($propss as $props)
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-4">
            <div class="card bg-dark text-white border-0">
            <img src="{{ $props->image==null ? "/images/caro-item-1.png" : asset('storage/'.$props->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class='card-title'>{{ $props->nama_product }}</h5>
            <p class='card-text'>
                <strong>Price : </strong> IDR {{ number_format($props->price) }} <br>
                <strong>Stock :</strong> {{ $props->jumlah_product }} <br>
                <strong>Category : </strong> {{ $props->kategori->kategori }} <br>
                <hr>
                <strong>Description : </strong> <br>
                {{ $props->description }}
            </p>
            <a href="{{ url('order') }}/{{ $props->id }}" class="btn btn-light"><i
                class="fa fa-shopping-cart"></i> Buy</a>
            </div>
            </div>
            </div>
            @endforeach
            <div class="pagination-container mt-4">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item {{ $propss->previousPageUrl() ? '' : 'disabled' }} me-5">
                            <a class="page-link" href="{{ $propss->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
            
                        <li class="page-item {{ $propss->nextPageUrl() ? '' : 'disabled' }} ms-5">
                            <a class="page-link" href="{{ $propss->nextPageUrl() }}" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
