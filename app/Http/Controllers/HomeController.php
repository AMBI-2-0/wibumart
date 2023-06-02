<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::paginate(12);
        return view('home', compact('products') ,['title' => 'Home Page']);
    }
}
