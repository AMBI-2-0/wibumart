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
                <h3>My Cart</h3>
            </div>
            @if (!empty($cartItems))
                {{-- <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4>Ordered Date : {{ $keranjangs->tanggal_pembelian }}</h4>
                </div> --}}
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
                                        <p style="color:black;"><span class="text-muted ">Stock :
                                            </span>{{ $item->products->jumlah_product }}
                                        <p style="color:black;"><span class="text-muted ">Category :
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
                                        <h5 class="mb-0">Rp
                                            <span>{{ number_format($item->products->price * $item->prod_qty) }}</span>
                                        </h5>
                                    </div>

                                    {{-- button remove --}}
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                        <button class="btn btn-danger btn-sm delete-cart-item"><i class="fas fa-trash fa-lg"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php $total += $item->products->price * $item->prod_qty ; @endphp
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
                            <p class="mb-2"><strong>Total Products Price</strong></p>
                            <p class="mb-2"><strong>Rp {{ number_format($total) }}</strong></p>
                        </div>

                        <hr class="my-4">

                        <a href="/payment" class="btn btn-primary btn-block btn-lg">
                            <div class="d-flex justify-content-between checkout">
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
