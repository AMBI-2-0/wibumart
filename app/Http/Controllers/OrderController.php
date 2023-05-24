<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Keranjang;
use App\Models\KeranjangDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index($id){
        $product = Product::where('id', $id)->first();

        return view('order.index', compact('product'), ['title' => 'Detail Product']);
    }

    public function order(Request $request, $id){
        $product = Product::where('id', $id)->first();
        $tanggal_pembelian = Carbon::now();

        //validasi apakah melebihi stock
        if($request->order_quantity > $product->jumlah_product)
        {
            return redirect('order/'.$id);
        }

        //cek validasi
        $cek_keranjang = Keranjang::where('users_id', Auth::user()->id)->where('status', 0)->first();

        //simpan ke database keranjang ya cuy
        if(empty($cek_keranjang)){
            $keranjangs = new Keranjang;
            $keranjangs->users_id = Auth::user()->id;
            $keranjangs->tanggal_pembelian = $tanggal_pembelian;
            $keranjangs->status = 0;
            $keranjangs->total_harga = 0;
            $keranjangs->save();
        }
        

        //simpan ke database keranjang_detail pulang jah :v
        $keranjang_baru = Keranjang::where('users_id', Auth::user()->id)->where('status', 0)->first();

        //cek keranjang detail
        $cek_keranjang_detail = KeranjangDetail::where('product_id', $product->id)->where('keranjangs_id', $keranjang_baru->id)->first();
        if(empty($cek_keranjang_detail)){
            $keranjang_details = new KeranjangDetail;
            $keranjang_details->product_id = $product->id;
            $keranjang_details->keranjangs_id = $keranjang_baru->id;
            $keranjang_details->jumlah_pesanan = $request->order_quantity;
            $keranjang_details->jumlah_harga = $product->price*$request->order_quantity;
            $keranjang_details->save();
        }
        else
        {
            $keranjang_details = KeranjangDetail::where('product_id', $product->id)->where('keranjangs_id', $keranjang_baru->id)->first();
            $keranjang_details->jumlah_pesanan = $keranjang_details->jumlah_pesanan + $request->order_quantity;

            //harga sekarang
            $price_keranjang_detail_baru = $product->price*$request->order_quantity;
            $keranjang_details->jumlah_harga = $keranjang_details->jumlah_harga + $price_keranjang_detail_baru;
            $keranjang_details->update();
        }

        //jumlah total harga
        $keranjangs = Keranjang::where('users_id', Auth::user()->id)->where('status', 0)->first();
        $keranjangs->total_harga = $keranjangs->total_harga + $product->price*$request->order_quantity;
        $keranjangs->update();

        return redirect('home');
    }
}
