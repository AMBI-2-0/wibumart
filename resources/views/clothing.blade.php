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

        .bg-lightblue {
            background-color: rgba(153, 198, 234, 0.221);
        }

        .bg-transparent {
            background-color: transparent;
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
                    <h1 class="hero-title">Immerse Yourself in the Captivating World of Light Novels and Manga!</h1>
                    <p class="hero-description">Delve into the boundless realms of imagination and storytelling with our
                        captivating collection of Light novels and manga.</p>
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
    <h2 class="text-white mt-5">Most Favorite</h2>

    <div class="card bg-lightblue ">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-2">
                    <div class="card card bg-transparent">
                        <div class="card-body">
                            <h6 class="card-title text-white">Card 1</h6>
                            <p class="card-text">Some example text.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card card bg-transparent">
                        <div class="card-body">
                            <h6 class="card-title text-white">Card 2</h6>
                            <p class="card-text">Some example text.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card card bg-transparent">
                        <div class="card-body">
                            <h6 class="card-title text-white">Card 3</h6>
                            <p class="card-text">Some example text.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card card bg-transparent">
                        <div class="card-body">
                            <h6 class="card-title text-white">Card 4</h6>
                            <p class="card-text">Some example text.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card card bg-transparent">
                        <div class="card-body">
                            <h6 class="card-title text-white">Card 5</h6>
                            <p class="card-text">Some example text.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card card bg-transparent">
                        <div class="card-body">
                            <h6 class="card-title text-white">Card 6</h6>
                            <p class="card-text">Some example text.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2 class="text-white mt-5">All Clothing</h2>
    <div class="container-fluid">
        <div class="row">
            <?php
            for ($i = 1; $i <= 24; $i++) {
                echo '<div class="col-12 col-sm-6 col-md-4 col-lg-2 mt-4">';
                echo '<div class="card bg-dark text-white border-0">';
                echo '<img src="/images/caro-item-1.png" class="card-img-top" alt="...">';
                echo '<div class="card-body">';
                echo "<h5 class='card-title'>Card $i</h5>";
                echo "<p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content. $i</p>";
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
@endsection
