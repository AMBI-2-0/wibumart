@extends('layouts.master')

<style>
    .carousel-item img {
        transition: transform 0.2s ease-in-out;
        border-radius: 20px;
    }
</style>

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
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
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
        </div>
    </div>

    <h2 class="text-white mt-5">Our Product</h2>

    <div class="container-fluid">
        <div class="row">

            @foreach ($products as $product)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="card bg-dark text-white border-0">
                        <img src="/images/caro-item-1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class='card-title'>{{ $product->nama_product }}</h5>
                            <p class='card-text'>
                                <strong>Price : </strong> IDR {{ number_format($product->price) }} <br>
                                <strong>Stock :</strong> {{ $product->jumlah_product }} <br>
                                <strong>Category : </strong> {{ $product->kategori_product }} <br>
                                <hr>
                                <strong>Description : </strong> <br>
                                {{ $product->description }}
                            </p>
                            <a href="{{ url('order') }}/{{ $product->id }}" class="btn btn-light"><i
                                    class="fa fa-shopping-cart"></i> Buy</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
