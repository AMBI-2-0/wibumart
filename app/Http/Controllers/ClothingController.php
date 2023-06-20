<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Kategori;

class ClothingController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())->where('status', 'belum checkout')->get();
        $kategori = Kategori::where('kategori', 'Clothing')->first();
        if ($kategori) {
            $clothings = $kategori->product()->paginate(12);
        } else {
            $clothings = null;
        }
        return view('clothing', [ 'title' => 'Clothing Page', 'clothings' => $clothings, 'cartItems' => $cartItems]);
    }
}
