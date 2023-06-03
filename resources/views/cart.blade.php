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

    <div class="container">
        <h3>My Cart</h3>
    </div>

    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10">
            <div class="d-flex justify-content-between align-items-center mb-4">

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
                                            <img src="/images/bailu.jpeg" class="img-fluid rounded-3" alt="Bailu">
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <p class="lead fw-normal mb-2" style="color:black;">
                                                {{ $keranjang_detail->product->nama_product }}</p>
                                            <p style="color:black;"><span class="text-muted ">Order Quantity :
                                                </span>{{ $keranjang_detail->jumlah_pesanan }}
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                            <button class="btn btn-link px-2" onclick="updateQuantity(this, 'decrement')">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <input id="form{{ $loop->iteration }}" min="0" name="quantity"
                                                value="{{ $keranjang_detail->jumlah_pesanan }}" type="number"
                                                class="form-control form-control-sm"
                                                data-price="{{ $keranjang_detail->product->price }}" />
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

                            <!-- JS Untuk tombol (+) dan (-) -->
                            <script>
                                function updateQuantity(button, action) {
                                    var input = button.parentNode.querySelector('input[type=number]');
                                    var price = input.getAttribute('data-price');
                                    var priceElement = input.parentNode.nextElementSibling.firstElementChild;
                                    var quantity = parseInt(input.value);
                                    var oldQuantity = quantity;
                                    var newQuantity = (action === 'increment') ? quantity + 1 : quantity - 1;
                                    if (newQuantity < 0) {
                                        newQuantity = 0;
                                    }
                                    input.value = newQuantity;
                                    var newPrice = price * newQuantity * ((action === 'increment' && quantity === 0) ? 2 : 1);

                                    // Konversi harga menjadi format rupiah
                                    var formatter = new Intl.NumberFormat('id-ID', {
                                        style: 'currency',
                                        currency: 'IDR',
                                        minimumFractionDigits: 0
                                    });

                                    priceElement.textContent = formatter.format(newPrice);
                                }
                            </script>
                        @endforeach
                    </div>

                    <!-- JS Untuk Subtotal dan Checkout nya agar sinkron dengan tombol (+) dan (-) jika tertpicu
                                                                                                                                                                                                                                                                                                                                                                                                         tetapi masih belom work, karena belum ada id product  -->

                    <script>
                        // ambil elemen subtotal dan total pengiriman
                        var subtotalElement = document.querySelector('#subtotal');
                        var shippingElement = document.querySelector('#shipping');
                        var totalElement = document.querySelector('#total');
                        var checkoutButton = document.querySelector('.btn-primary');

                        // inisialisasi subtotal dan total pengiriman
                        var subtotal = totalProductsPrice + shippingCost;
                        var total = subtotal;

                        // tampilkan subtotal dan total pengiriman
                        subtotalElement.textContent = 'Rp ' + new Intl.NumberFormat('id-ID', {
                            style: 'decimal'
                        }).format(totalProductsPrice);

                        shippingElement.textContent = 'Rp ' + new Intl.NumberFormat('id-ID', {
                            style: 'decimal'
                        }).format(shippingCost);

                        totalElement.textContent = 'Rp ' + new Intl.NumberFormat('id-ID', {
                            style: 'decimal'
                        }).format(total);

                        // ambil elemen tombol (+) dan (-)
                        var plusButtons = document.querySelectorAll('.plus-btn');
                        var minusButtons = document.querySelectorAll('.minus-btn');

                        // tambahkan event listener pada tombol (+) dan (-)
                        for (var i = 0; i < plusButtons.length; i++) {
                            plusButtons[i].addEventListener('click', function() {
                                // tambahkan harga produk pada totalProductsPrice
                                var price = parseFloat(this.parentNode.previousElementSibling.textContent.replace('Rp ', '')
                                    .replace('.', ''));
                                totalProductsPrice += price;

                                // perbarui subtotal dan total pengiriman
                                subtotal = totalProductsPrice + shippingCost;
                                total = subtotal;

                                // tampilkan subtotal dan total pengiriman
                                subtotalElement.textContent = 'Rp ' + new Intl.NumberFormat('id-ID', {
                                    style: 'decimal'
                                }).format(totalProductsPrice);

                                totalElement.textContent = 'Rp ' + new Intl.NumberFormat('id-ID', {
                                    style: 'decimal'
                                }).format(total);

                                // update teks tombol checkout
                                checkoutButton.querySelector('span').textContent = 'Checkout Rp ' + new Intl.NumberFormat(
                                    'id-ID', {
                                        style: 'decimal'
                                    }).format(total);
                            });
                        }

                        for (var i = 0; i < minusButtons.length; i++) {
                            minusButtons[i].addEventListener('click', function() {
                                // kurangi harga produk dari totalProductsPrice
                                var price = parseFloat(this.parentNode.previousElementSibling.textContent.replace('Rp ', '')
                                    .replace('.', ''));
                                totalProductsPrice -= price;

                                // perbarui subtotal dan total pengiriman
                                subtotal = totalProductsPrice + shippingCost;
                                total = subtotal;

                                // tampilkan subtotal dan total pengiriman
                                subtotalElement.textContent = 'Rp ' + new Intl.NumberFormat('id-ID', {
                                    style: 'decimal'
                                }).format(totalProductsPrice);

                                totalElement.textContent = 'Rp ' + new Intl.NumberFormat('id-ID', {
                                    style: 'decimal'
                                }).format(total);

                                // update teks tombol checkout
                                checkoutButton.querySelector('span').textContent = 'Checkout Rp ' + new Intl.NumberFormat(
                                    'id-ID', {
                                        style: 'decimal'
                                    }).format(total);
                            });
                        }
                    </script>
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
                            <p class="mb-2" id="subtotal"><strong>Rp
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
                @endif
            </div>
        </div>
    </div>
@endsection
