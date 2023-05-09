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
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col bg-image hover-zoom">
                            <img src="{{ asset('images/caro-item-1.png') }}" class="d-block w-100" alt="...">
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

    <h2 class="text-white mt-5">Our Product</h2>

    <div class="container-fluid">
        <div class="row">
            <?php
            for ($i = 1; $i <= 24; $i++) {
                echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-4">';
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
