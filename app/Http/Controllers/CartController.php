<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart_items = [
            ['product_name' => 'Bailu 1', 'release_date' => 'Release January 2023', 'quantity' => 1 , 'price' => 500000],
            ['product_name' => 'Bailu 2', 'release_date' => 'Release January 2023', 'quantity' => 1 , 'price' => 500000],
            ['product_name' => 'Bailu 3', 'release_date' => 'Release January 2023', 'quantity' => 1 , 'price' => 500000],
        ];

        return view('cart', ['title' => 'Cart Page', 'cart_items' => $cart_items]);
    }

    
    //Authenticate for accessing cart page (masih error)

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
}