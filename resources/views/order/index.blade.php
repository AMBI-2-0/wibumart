@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $product->nama_product }}</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
                <a href="{{ url('home') }}" class="btn btn-dark"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="/images/caro-item-1.png" class="rounded mx-auto d-block" width="100%"
                                    alt="">
                            </div>
                            <div class="col-md-6">
                                <h2>{{ $product->nama_product }}</h2>
                                <hr>
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Price</td>
                                            <td> :</td>
                                            <td> IDR {{ number_format($product->price) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Stock</td>
                                            <td> :</td>
                                            <td> {{ number_format($product->jumlah_product) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Description</td>
                                            <td> :</td>
                                            <td> {{ $product->description }}</td>
                                        </tr>
                                        <tr>
                                            <td>Order Quantity</td>
                                            <td>:</td>
                                            <td>
                                                <form action="{{ url('cart') }}/{{ $product->id }}" method="POST">
                                                    @csrf
                                                    <input type="number" name="order_quantity"
                                                        class="form-control form-control-sm" required>
                                                    <button type="submit" class="btn btn-dark mt-2"><i
                                                            class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
