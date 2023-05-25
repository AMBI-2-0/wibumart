<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $selectedCategoryId = $request->input('kategori');

        $products = Product::filterByCategory($selectedCategoryId)->get();
        $kategoris = Kategori::all();

        return view('dashboard/productAdmin', compact('products', 'kategoris', 'selectedCategoryId'),[
            'title'=> 'Products'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forms/productCreate', [
            'title' => 'Create ',
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $valid = request()->validate([
            'nama_product' => 'required',
            'description' => 'required',
            'price' => 'required',
            'jumlah_product' => 'required',
            'kategori_id' => 'required'
        ]);

        Product::create($valid);

        session()->flash('success', 'Produk berhasil dibuat!');

        return redirect('/dashboard/products');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('dashboard.productDetail', [
            'title' => "Product Detail",
            'product' => Product::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('forms.productEdit', [
            'title' => 'Edit',
            'product' => $product,
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Product $product)
    {
        $valid = request()->validate([
            'nama_product' => 'required',
            'description' => 'required',
            'price' => 'required',
            'jumlah_product' => 'required',
            'kategori_id' =>'required'
        ]);

        Product::where('id', $product->id)->update($valid);

        return redirect('/dashboard/products')->with('update', 'Produk berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product = Product::find($product->id);
        $product->delete();

        return redirect('/dashboard/products')->with('delete', 'Produk berhasil dihapus!');
    }

    public function filter($id)
    {

        return view('dashboard/filterProductAdmin', [
            'title' => 'Products',
            'kategori' => Kategori::find($id)
        ]);
    }
}
