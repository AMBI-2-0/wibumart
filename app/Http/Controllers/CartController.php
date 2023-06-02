<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Keranjang;
use App\Models\KeranjangDetail;
use Illuminate\Support\Facades\Auth;
use Alert;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $keranjangs = Keranjang::where('users_id', Auth::user()->id)->where('status', 0)->first();
        $keranjang_details = KeranjangDetail::where('keranjangs_id', $keranjangs->id)->get();

        return view('cart', compact('keranjangs', 'keranjang_details'), ['title' => 'Cart Page']);





        // $cart_items = [
        //     ['product_name' => 'Bailu 1', 'release_date' => 'Release January 2023', 'quantity' => 1 , 'price' => 500000],
        //     ['product_name' => 'Bailu 2', 'release_date' => 'Release January 2023', 'quantity' => 1 , 'price' => 500000],
        //     ['product_name' => 'Bailu 3', 'release_date' => 'Release January 2023', 'quantity' => 1 , 'price' => 500000],
        // ];

        // return view('cart', ['title' => 'Cart Page', 'cart_items' => $cart_items]);
    }
}