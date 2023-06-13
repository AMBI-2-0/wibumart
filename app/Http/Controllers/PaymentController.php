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
            return $item->products->price * $item->quantity;
        });

        $dompetDigital = $user->duit;

        return view('payment', ['title' => 'Payment Page', 'cartItems' => $cartItems, 'totalPrice' => $totalPrice, 'dompetDigital' => $dompetDigital, 'user' => $user]);
    }

    public function checkout()
    {
        // if (totalPrice > duit){
        //     kirim alert uang tidak cukup tolong topup terlebih dulu
        // } siapa pun yang menggawi ini buat logik ini di checkout
    }
}
