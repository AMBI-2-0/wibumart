@extends('layouts.master')

@section('content')
    <style>
        h3 {
            font-weight: 700;
            font-size: 50px;
            line-height: 61px;
            display: flex;
            align-items: center;
            font-family: 'Inter';
            font-style: normal;
            color: #FFFFFF;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }

        h4 {
            font-weight: normal;
            font-size: 20px;
            line-height: 28px;
            display: flex;
            align-items: center;
            font-family: 'Inter';
            font-style: normal;
            color: #FFFFFF;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }
    </style>
    <script>
        function updateQuantity(element, action) {
            var inputElement = element.parentNode.querySelector('input');
            var priceElement = element.parentNode.parentNode.querySelector('h5 span');
            var price = parseFloat(inputElement.getAttribute('data-price'));
            var quantity = parseInt(inputElement.value);

            if (action === 'increment') {
                quantity++;
            } else if (action === 'decrement' && quantity > 1) {
                quantity--;
            }

            inputElement.value = quantity;
            priceElement.innerHTML = formatPrice(price * quantity);
            updateSubtotal();
        }

        function formatPrice(price) {
            return new Intl.NumberFormat('id-ID').format(price);
        }

        function updateSubtotal() {
            var subtotals = document.querySelectorAll('.price');
            var subtotal = 0;

            subtotals.forEach(function(element) {
                var price = parseFloat(element.innerHTML.replace(/,/g, ''));
                subtotal += price;
            });

            var quantityInputs = document.querySelectorAll('input[name="quantity"]');
            quantityInputs.forEach(function(inputElement) {
                var price = parseFloat(inputElement.getAttribute('data-price'));
                var quantity = parseInt(inputElement.value);
                subtotal += price * quantity;
            });

            var subtotalElement = document.getElementById('subtotal');
            subtotalElement.innerHTML = 'Rp ' + formatPrice(subtotal);
        }
    </script>

    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3>My Cart</h3>
            </div>
            @if (!empty($keranjangs))
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4>Ordered Date : {{ $keranjangs->tanggal_pembelian }}</h4>
                </div>
                <div class="container">
                    @foreach ($keranjang_details as $keranjang_detail)
                        <div class="card rounded-3 mb-4">
                            <div class="card-body p-4">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img src="{{ $keranjang_detail->product->image == null ? '/images/caro-item-1.png' : asset('storage/' . $keranjang_detail->product->image) }}"
                                            class="img-fluid rounded-3" alt="Bailu">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <p class="lead fw-normal mb-2" style="color:black;">
                                            {{ $keranjang_detail->product->nama_product }}</p>
                                        <p style="color:black;"><span class="text-muted ">Order Quantity :
                                            </span>{{ $keranjang_detail->jumlah_pesanan }}
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">

                                        {{-- button plus --}}
                                        <button class="btn btn-link px-2" onclick="updateQuantity(this, 'decrement')">
                                            <i class="fas fa-minus"></i>
                                        </button>

                                        <input id="form{{ $loop->iteration }}" min="1" name="quantity"
                                            value="{{ $keranjang_detail->jumlah_pesanan }}" type="number"
                                            class="form-control form-control-sm"
                                            data-price="{{ $keranjang_detail->product->price }}"
                                            oninput="updateSubtotal()" />

                                        {{-- button minus --}}
                                        <button class="btn btn-link px-2" onclick="updateQuantity(this, 'increment')">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h5 class="mb-0">Rp <span
                                                id="price{{ $loop->iteration }}">{{ number_format($keranjang_detail->product->price * $keranjang_detail->jumlah_pesanan) }}</span>
                                        </h5>
                                    </div>
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                        <form action="{{ url('cart') }}/{{ $keranjang_detail->id }}" method="POST">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fas fa-trash fa-lg"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
    </div>

    <div class="row d-flex justify-content-center">
        <div class="col-10">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="container">
                    <div class="col-lg-5 col-xl-4" style="color: #FFFFFF;">
                        <div class="d-flex justify-content-between" style="font-weight: 500;">
                            <p class="mb-2"><strong>Total Product Price</strong></p>
                            <p class="mb-2" id="subtotal" data-total="{{ $keranjangs->total_harga }}"><strong>Rp
                                    {{ number_format($keranjangs->total_harga) }}</strong></p>
                        </div>

                        <hr class="my-4">

                        <a href="/confirm-checkout" class="btn btn-primary btn-block btn-lg">
                            <div class="d-flex justify-content-between">
                                <span><i class="fa fa-shopping-cart"></i> Checkout</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection
