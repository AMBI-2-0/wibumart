<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;

class CartController extends Controller
{

    public function viewcart()
    {
        $cartItems = Cart::where('user_id', Auth::id())->where('status', 'belum checkout')->get();
        $total = $cartItems->sum('total_harga');
        return view('cart', compact('cartItems', 'total'), ['title' => 'Cart Page']);
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
                    if ($product_qty > $prod_check->jumlah_product){
                        return response()->json(['status' => "Stok Tidak Cukup"]);
                    }
                    else
                    {
                        $cartItem = new Cart();
                        $cartItem->product_id = $product_id;
                        $cartItem->user_id = Auth::id();
                        $cartItem->prod_qty = $product_qty;
                        $cartItem->tanggal_pembelian = $tanggal_pembelian;
                        $cartItem->total_harga = 0;
                        $cartItem->save();
                        return response()->json(['status' => $prod_check->nama_product." Added to Cart", 'redirect' => '/cart']);
                    }
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

    public function checkout()
    {
        $cart = Cart::where('user_id', Auth::user()->id)->where('status', 'belum checkout')->first();
        $cart_id = $cart->id;
        $cart->status = 'sudah checkout';
        $cart->update();

        $duit = Auth::user()->duit - $cart->total_harga;
        Auth::user()->update(['duit' => $duit]);

        $cart_items = Cart::where('id', $cart_id)->get();
        foreach ($cart_items as $cart_item){
            $product = Product::find($cart_item->product_id);
            $product->jumlah_product -= $cart_item->prod_qty;
            $product->update();
        }

        // Ganti Alert::success dengan mekanisme yang sesuai di framework Anda
        // Contoh menggunakan pesan flash session dalam Laravel
        session()->flash('success', 'Order Checkout Successfully!');
        return redirect('/payment');
    }

}