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
    public function viewcart()
    {
        $keranjangs = Keranjang::where('users_id', Auth::user()->id)->where('status', 0)->first();
        $keranjang_details = []; // Inisialisasi variabel $keranjang_details dengan array kosong

        if (!empty($keranjangs)) {
            $keranjang_details = KeranjangDetail::where('keranjangs_id', $keranjangs->id)->get();
        }

        return view('cart', compact('keranjangs', 'keranjang_details'), ['title' => 'Cart Page']);
    }
}