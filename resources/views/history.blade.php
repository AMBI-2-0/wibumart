<!-- history.blade.php -->

@extends('layouts.master')

@section('content')
  <div class="container">
    <h1 class="text-white">Purchase History</h1>
    
    @foreach ($cartItems as $item)
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ $item->products->image }}" alt="Product Image" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->products->nama_product }}</h5>
                        <p class="card-text">Price: {{ $item->products->price }}</p>
                        <p class="card-text">Order Date: {{ $item->created_at->format('d/m/y') }}</p>
                        <p class="card-text">Status: <span class="badge badge-primary text-black">Completed</span></p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="text-center">
        <a href="/home" class="btn btn-primary">Continue</a>
    </div>
</div>
@endsection