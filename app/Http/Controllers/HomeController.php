<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::paginate(12);
        $cartItems = Cart::where('user_id', Auth::id())->where('status', 'belum checkout')->get();
        return view('home', compact('products', 'cartItems') ,['title' => 'Home Page', 'products' => $products]);
    }
}
