<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class PaymentController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $cartItems = Cart::where('user_id', auth()->id())->with('products')->get();
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->products->price * $item->prod_qty;
        });

        $dompetDigital = $user->duit;

        return view('payment', ['title' => 'Payment Page', 'cartItems' => $cartItems, 'totalPrice' => $totalPrice, 'dompetDigital' => $dompetDigital, 'user' => $user]);
    }
}
