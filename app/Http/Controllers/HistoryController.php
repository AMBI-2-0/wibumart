<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class HistoryController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('user_id', auth()->id())->with('products')->get();

        return view('history', ['title' => 'Purchase History', 'cartItems' => $cartItems]);
    }
}

