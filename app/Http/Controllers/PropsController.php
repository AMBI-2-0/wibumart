<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Kategori;

class PropsController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())->where('status', 'belum checkout')->get();
        $kategori = Kategori::where('kategori', 'Props')->first();
        if ($kategori) {
            $propss = $kategori->product()->paginate(12);
        } else {
            $propss = null;
        }
        return view('props', [ 'title' => 'Props Page', 'propss' => $propss, 'cartItems' => $cartItems ]);
    }
}
