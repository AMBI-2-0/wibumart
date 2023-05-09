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
        <p class="hero-description">Explore our collection of high-quality figures to add to your collection today.</p>
        <a href="#" class="btn btn-primary hero-button">Shop Now</a>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('images/figure-hero.png') }}" alt="Figure Hero Image" class="hero-image">
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">
          <div class="col-md-4">
            <img src="{{ asset('images/caro-item-1.png') }}" class="img-fluid">
          </div>
          <div class="col-md-4">
            <img src="{{ asset('images/caro-item-1.png') }}" class="img-fluid">
          </div>
          <div class="col-md-4">
            <img src="{{ asset('images/caro-item-1.png') }}" class="img-fluid">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-md-4">
            <img src="{{ asset('images/caro-item-2.png') }}" class="img-fluid">
          </div>
          <div class="col-md-4">
            <img src="{{ asset('images/caro-item-3.png') }}" class="img-fluid">
          </div>
          <div class="col-md-4">
            <img src="{{ asset('images/caro-item-4.png') }}" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
@endsection