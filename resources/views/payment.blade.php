@extends('layouts.master')

@section('content')
<br>
<div class="container">
        <h1 class="text-white">Thankyou for your purchase</h1>
        <table class="table table-hover">
          @foreach ($payment_items as $item)
              
                <tbody class="text-white">
                        <tr>
                          <td>Date</td>
                          <td>{{ $item['date'] }}</td>
                        </tr>
                        <tr>
                          <td>Customer</td>
                          <td>{{ $item['name'] }}</td>
                        </tr>
                        <tr>
                          <td>Payment Method</td>
                          <td>{{ $item['method'] }}</td>
                        </tr>
                      </tbody>
        </table>
        <br>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="text-white"><h2>Order Line</h2></th>
            </tr>
          </thead>
          <tbody class="text-white">
            <tr>
                <td><img src="images\bailu.jpg" alt="" style="height:10rem;width:10rem">
                  <span class="text-muted ">Keterangan Produk: </span>{{ $item['product'] }}/{{ $item['release_date'] }}/{{ $item['quantity'] }}
              <td>{{ $item['price'] }}</td>
            </tr>
            <tr>
                <td><img src="images\bailu.jpg" alt="" style="height:10rem;width:10rem">
                  <span class="text-muted ">Keterangan Produk: </span>{{ $item['product'] }}/{{ $item['release_date'] }}/{{ $item['quantity'] }}
                  <td>{{ $item['price'] }}</td>      
            </tr>
          </tbody>
        </table>
        <hr>
        <div class="text-left">
                <button type="button" class="btn btn-primary">Continue Shopping</button>
              </div>
      </div>  
  @endforeach
@endsection