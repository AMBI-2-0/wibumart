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

        
    </style>
@endsection

@section('carousel')
@endsection

@section('content')
    <section class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="hero-title">Find Your Perfect Figure</h1>
                    <p class="hero-description">Explore our collection of high-quality figures to add to your collection
                        today.</p>
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
@endsection
