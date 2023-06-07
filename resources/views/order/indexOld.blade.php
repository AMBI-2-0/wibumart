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
                <div class="card product_data">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ $product->image == null ? '/images/caro-item-1.png' : asset('storage/' . $product->image) }}"
                                    class="rounded mx-auto d-block" width="100%" alt="">
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
                                            <td>Category</td>
                                            <td> :</td>
                                            <td> {{ $product->kategori->kategori }}</td>
                                        </tr>
                                        <tr>
                                            <td>Description</td>
                                            <td> :</td>
                                            <td> {{ $product->description }}</td>
                                        </tr>
                                        <tr>
                                            <input type="hidden" value="{{ $product->id }}" class="product_id">
                                            <td for="Quantity">Order Quantity</td>
                                            <td>:</td>
                                            <td>
                                                {{-- <form action="{{ url('cart') }}/{{ $product->id }}" method="POST">
                                                    @csrf
                                                    <input type="number" name="order_quantity"
                                                        class="form-control form-control-sm" required>
                                                    <button type="submit" class="btn btn-dark mt-2"><i
                                                            class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                </form> --}}

                                                <div class="input-group text-center" style="width:130px;">
                                                    <span class="input-group-text decrement-btn">-</span>
                                                    <input type="text" name="quantity"
                                                        class="form-control text-center qty-input" value="1">
                                                    <span class="input-group-text increment-btn">+</span>
                                                </div>

                                                <div>
                                                    <br>
                                                    <button type="button"
                                                        class="btn btn-dark me-3 addToCartBtn float-start">Add to Cart
                                                        <i class="fa fa-shopping-cart"></i></button>
                                                </div>
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

<script src="/assets/jquery.js"></script>

<script>
    $(document).ready(function() {

        $('.addToCartBtn').click(function(e) {
            e.preventDefault();

            var product_id = $(this).closest('.product_data').find('.product_id').val();
            var product_qty = $(this).closest('.product_data').find('.qty-input').val();

            $.ajax({
                method: "POST",
                url: "/cart",
                data: {
                    'product_id': product_id,
                    'product_qty': product_qty
                },
                success: function(response) {

                }
            });

        });

        $('.increment-btn').click(function(e) {
            e.preventDefault();

            var inc_value = $('.qty-input').val();
            var value = parseInt(inc_value, 10);
            value = isNaN(value) ? 0 : value;
            if (value < 10) {
                value++;
                $('.qty-input').val(value);
            }
        });

        $('.decrement-btn').click(function(e) {
            e.preventDefault();

            var dec_value = $('.qty-input').val();
            var value = parseInt(dec_value, 10);
            value = isNaN(value) ? 0 : value;
            if (value > 1) {
                value--;
                $('.qty-input').val(value);
            }
        });
    });
</script>
