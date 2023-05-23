<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //Authenticate for accessing cart page (masih error)

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index($id){
        $product = Product::where('id', $id)->first();

        return view('order.index', compact('product'), ['title' => 'Detail Product']);
    }
}
