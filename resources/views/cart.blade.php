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

    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3>Keranjang {{ auth()->user()->nama }}</h3>
            </div>
            @if (count($cartItems) > 0)
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4>Tanggal Pemesanan : {{ $cartItems[0]->tanggal_pembelian }}</h4>
                </div>
                <div class="container">
                    @php $total = 0; @endphp
                    @foreach ($cartItems as $item)
                        <div class="card rounded-3 mb-4">
                            <div class="card-body p-4">
                                <div class="row d-flex justify-content-between align-items-center product_data">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img src="{{ $item->products->image == null ? '/images/caro-item-1.png' : asset('storage/' . $item->products->image) }}"
                                            class="img-fluid rounded-3" alt="Bailu">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <p class="lead fw-normal mb-2" style="color:black;">
                                            {{ $item->products->nama_product }}</p>
                                        <p style="color:black;"><span class="text-muted ">Stok :
                                            </span>{{ $item->products->jumlah_product }}
                                        <p style="color:black;"><span class="text-muted ">Kategori :
                                            </span>{{ $item->products->kategori->kategori }}
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                        <input type="hidden" class="product_id" value="{{ $item->product_id }}">

                                        {{-- button minus --}}
                                        <button class="btn btn-link px-2 changeQuantity decrement-btn">
                                            <i class="fas fa-minus"></i>
                                        </button>

                                        <input name="quantity" value="{{ $item->prod_qty }}" type="text"
                                            class="form-control qty-input text-center"
                                            data-price="{{ $item->products->price }}" />

                                        {{-- button plus --}}
                                        <button class="btn btn-link px-2 changeQuantity increment-btn">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h5 class="mb-0">IDR
                                            <span>{{ number_format($item->products->price * $item->prod_qty) }}</span>
                                        </h5>
                                    </div>

                                    {{-- button remove --}}
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                        <button class="btn btn-danger btn-sm delete-cart-item"><i
                                                class="fas fa-trash fa-lg"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php $total += $item->products->price * $item->prod_qty ; @endphp
                    @endforeach
                </div>
                <div class="row">
                    <div class="container">
                        <div class="col-lg-5 col-xl-4 mb-4" style="color: #FFFFFF;">
                            <div class="d-flex justify-content-between" style="font-weight: 500;">
                                <p class="mb-2"><strong>Total Harga Produk</strong></p>
                                <p class="mb-2"><strong>IDR {{ number_format($total, 0, ',', '.') }}</strong></p>
                            </div>

                            <hr class="my-4">

                            <a href="/checkout" class="btn btn-primary btn-block btn-lg">
                                <div class="d-flex justify-content-between checkout">
                                    <span><i class="fa fa-shopping-cart"></i> Lakukan Pembayaran</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @else
                <div class="card rounded-3 mb-4">
                    <div class="card-body p-4">
                        <div class="row d-flex justify-content-between align-items-center">
                            <h3 style="color: black;">Keranjang Kosong</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="col-lg-5 col-xl-4 mb-4" style="color: #FFFFFF;">
                            <div class="d-flex justify-content-between" style="font-weight: 500;">
                                <p class="mb-2"><strong>Total Harga Produk</strong></p>
                                <p class="mb-2"><strong>IDR 0</strong></p>
                            </div>

                            <hr class="my-4">

                            <button class="btn btn-primary btn-block btn-lg" onclick="showAlert()">
                                <div class="d-flex justify-content-between checkout">
                                    <span><i class="fa fa-shopping-cart"></i> Lakukan Pembayaran</span>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <script>
        function showAlert() {
            alert("Keranjang kosong. Tidak dapat melanjutkan ke pembayaran.");
        }
    </script>
@endsection
