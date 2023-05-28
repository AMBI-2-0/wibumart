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

        Alert::success('Success', 'Success Add to Cart!');
        return redirect('cart');
    }

    public function check_out()
    {
        $keranjangs = Keranjang::where('users_id', Auth::user()->id)->where('status', 0)->first();
        $keranjang_details = []; // Inisialisasi variabel $keranjang_details dengan array kosong

        if (!empty($keranjangs)) {
            $keranjang_details = KeranjangDetail::where('keranjangs_id', $keranjangs->id)->get();
        }

        return view('cart', compact('keranjangs', 'keranjang_details'), ['title' => 'Cart Page']);
    }


    public function delete($id){
        $keranjang_details = KeranjangDetail::where('id', $id)->first();

        $keranjangs = Keranjang::where('id', $keranjang_details->keranjangs_id)->first();
        $keranjangs->total_harga = $keranjangs->total_harga - $keranjang_details->jumlah_harga;
        $keranjangs->update();

        $keranjang_details->delete();

        Alert::error('Delete', 'Order Has Been Deleted!');
        return redirect('cart');
    }

    public function confirm(){
        $keranjangs = Keranjang::where('users_id', Auth::user()->id)->where('status', 0)->first();
        $keranjangs_id = $keranjangs->id;
        $keranjangs->status = 1;
        $keranjangs->update();

        $keranjang_details = KeranjangDetail::where('keranjangs_id', $keranjangs_id)->get();
        foreach ($keranjang_details as $keranjang_detail){
            $product = Product::where('id', $keranjang_detail->product_id)->first();
            $product->jumlah_product = $product->jumlah_product - $keranjang_detail->jumlah_pesanan;
            $product->update();
        }


        Alert::success('Success', 'Order Checkout Successfully!');
        return redirect('cart');
    }
}
