@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="py-5 text-center">
            <div class="jumbotron text-center">
                <h1 class="display-4 text-white">Thank you for your purchase</h1>
            </div>
        </div>
    </div>

    @if ($user)
        <table class="table table-hover">
            <tbody class="text-white">
                <tr>
                    <td>Date</td>
                    <td>{{ $cartItems[0]->created_at->format('d/m/y') }}</td>
                </tr>
                <tr>
                    <td>Customer</td>
                    <td>{{ $user->nama }}</td>
                </tr>
                <tr>
                    <td>Customer address</td>
                    <td>{{ $user->alamat }}</td>
                </tr>
                <tr>
                    <td>Payment Method</td>
                    <td>Dompet Wibumart Sejahterah: Rp.{{ number_format($dompetDigital, 0, ',', '.') }}</td>
                </tr>
            </tbody>
        </table>
    @endif

    <h1 class="card-title text-white">Order Item</h1>

    @foreach($cartItems as $item)
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ $item->products->image }}" alt="bailu" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text"><span class="fw-bold">Product Name:</span> {{ $item->products->nama_product }}</p>
                        <p class="card-text"><span class="fw-bold">Product Description:</span> {{ $item->products->description }}</p>
                        <p class="card-text"><span class="fw-bold">Price:</span> {{ $item->products->price }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="text-center">
        <a href="{{ route('history') }}" class="btn btn-primary">View Purchase History</a>
    </div>
</div>
