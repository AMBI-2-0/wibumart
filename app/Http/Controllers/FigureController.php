<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;

class FigureController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())->where('status', 'belum checkout')->get();
        $kategori = Kategori::where('kategori', 'Figurine')->first();
        if ($kategori) {
            $figures = $kategori->product()->paginate(12);
        } else {
            $figures = null;
        }
        return view('figure_product', ['title' => 'Figurine Page','figures' => $figures, 'cartItems' => $cartItems]);
    }
}
