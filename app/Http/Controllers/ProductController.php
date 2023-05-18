<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard/productAdmin', [
            'title' => 'Products',
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forms/productCreate', [
            'title' => 'Create ',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $register)
    {
        $validatedData = $register->validate([
            'nama_product' => 'required|min:3| max:255',
            'description' => 'required|min:4|max:255',
            'price' => 'required',
            'jumlah_produk' => 'required',
        ]);

        dd($validatedData);

        Product::create($validatedData);

        session()->flash('success', 'Produk berhasil dibuat!');

        return redirect('/dashboard/products');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('dashboard.detailUser', [
            'title' => "Product Detail",
            'product' => Product::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('forms.editUser',[
            'title' => 'Edit',
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Product $product)
    {
        // $validatedData = request()->validate([
        //     'nama' => 'min:3| max:255',
        //     'username' => 'min:4|max:255',
        //     'is_admin' => 'required',
        //     'alamat' => 'max:500'
        // ]);

        // Product::where('id',$product->id)->update($validatedData);

        return redirect('/dashboard/users')->with('update', 'User berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product = Product::find($product->id);
        $product->delete();

        return redirect('/dashboard/users')->with('delete', 'User berhasil dihapus!');
    }
}
