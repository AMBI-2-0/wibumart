<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $selectedCategoryId = $request->input('kategori');

        $products = Product::filterByCategory($selectedCategoryId)->get();
        $kategoris = Kategori::all();

        return view('dashboard.productAdmin', compact('products', 'kategoris', 'selectedCategoryId'))->with('title', 'Products');
    }

    public function create()
    {
        $kategoris = Kategori::all();

        return view('forms.productCreate', compact('kategoris'))->with('title', 'Create Product');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_product' => 'required|min:3|max:255',
            'image' =>'required|image|file|max:1048',
            'description' => 'required',
            'price' => 'required',
            'jumlah_product' => 'required|max:255',
            'kategori_id' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('public/images');
        }

        Product::create($validatedData);

        session()->flash('success', 'Produk berhasil dibuat!');

        return redirect('/dashboard/products');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $kategoris = Kategori::all();

        return view('forms.productEdit', compact('product', 'kategoris'))->with('title', 'Edit Product');
    }

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'nama_product' => 'required',
            'image' =>'image|file|max:1048',
            'description' => 'required',
            'price' => 'required',
            'jumlah_product' => 'required',
            'kategori_id' =>'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('public/images');
        } else {
            $validatedData['image'] = $product->image;
        }

        $product->update($validatedData);

        return redirect('/dashboard/products')->with('update', 'Produk berhasil diupdate!');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/dashboard/products')->with('delete', 'Produk berhasil dihapus!');
    }

    public function filter($id)
    {
        $kategori = Kategori::find($id);

        return view('dashboard.filterProductAdmin', compact('kategori'))->with('title', 'Products');
    }

    public function show($id)
{
    $product = Product::findOrFail($id);

    return view('dashboard.productDetail', compact('product'))->with('title', 'Product Detail');
}

}
