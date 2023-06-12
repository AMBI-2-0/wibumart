<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Kategori;

class AccessoriesController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())->where('status', 'belum checkout')->get();
        $kategori = Kategori::where('kategori', 'Accessories')->first();
        if ($kategori) {
            $accessoriess = $kategori->product()->paginate(12);
        } else {
            $accessoriess = null;
        }
        return view('accessories', [
            'title' => 'Accessories Page',
            'accessoriess' => $accessoriess,
            'cartItems' => $cartItems
        ]);
    }
}
