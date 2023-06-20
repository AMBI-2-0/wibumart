<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Kategori;

class BookController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())->where('status', 'belum checkout')->get();
        $kategori = Kategori::where('kategori', 'Books')->first();
        if ($kategori) {
            $books = $kategori->product()->paginate(12);
        } else {
            $books = null;
        }
        return view('book', [
            'title' => 'Book Page',
            'books' => $books,
            'cartItems' => $cartItems
        ]);
    }
   
}
