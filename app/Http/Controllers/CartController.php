<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Alert;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function viewcart()
    {
        $cartItems = Cart::where('user_id', Auth::id())->where('status', 'belum checkout')->get();
        return view('cart', compact('cartItems'), ['title' => 'Cart Page']);


        // $keranjangs = Keranjang::where('users_id', Auth::user()->id)->where('status', 0)->first();
        // $keranjang_details = []; // Inisialisasi variabel $keranjang_details dengan array kosong

        // if (!empty($keranjangs)) {
        //     $keranjang_details = KeranjangDetail::where('keranjangs_id', $keranjangs->id)->get();
        // }

        // return view('cart', compact('keranjangs', 'keranjang_details'), ['title' => 'Cart Page']);
    }

    //fungsi untuk menampilkan Detail Product
    public function detailProduct($id){
        $product = Product::where('id', $id)->first();
        $cartItems = Cart::where('user_id', Auth::id())->where('status', 'belum checkout')->get();

        return view('order.index', compact('product', 'cartItems'), ['title' => 'Detail Product']);
    }

    public function addProduct(Request $request){
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');

        if(Auth::check())
        {
            $prod_check = Product::where('id', $product_id)->first();
            $tanggal_pembelian = Carbon::now();

            if($prod_check)
            {
                if(Cart::where('product_id', $product_id)->where('user_id', Auth::id())->exists())
                {
                    return response()->json(['status' => $prod_check->nama_product." Already Added to Cart", 'redirect' => '/cart']);
                }
                else
                {
                    $cartItem = new Cart();
                    $cartItem->product_id = $product_id;
                    $cartItem->user_id = Auth::id();
                    $cartItem->prod_qty = $product_qty;
                    $cartItem->tanggal_pembelian = $tanggal_pembelian;
                    $cartItem->save();
                    return response()->json(['status' => $prod_check->nama_product." Added to Cart", 'redirect' => '/cart']);
                }
            }
        }
        else
        {
            return response()->json(['status' => "Login to Continue"]);
        }

    }

    public function updateCart(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('prod_qty');

        if(Auth::check())
        {
            if(Cart::where('product_id', $product_id)->where('user_id', Auth::id())->exists())
            {
                $cart = Cart::where('product_id', $product_id)->where('user_id', Auth::id())->first();
                $cart->prod_qty = $product_qty;
                $cart->update();
                return response()->json(['status' => "Quantity Updated"]);
            }
        }
    }

    public function deleteProduct(Request $request)
    {
        if(Auth::check())
        {
            $product_id = $request->input('product_id');
            if(Cart::where('product_id', $product_id)->where('user_id', Auth::id())->exists())
            {
                $cartItem = Cart::where('product_id', $product_id)->where('user_id', Auth::id())->first();
                $cartItem->delete();
                return response()->json(['status' => "Product Deleted Succesfully"]);
            }
        }
        else
        {
            return response()->json(['status' => "Login to Continue"]);
        }
    }
}