<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class BookController extends Controller
{
    public function index()
    {
        $kategori = Kategori::where('kategori', 'Books')->first();
        if ($kategori) {
            $books = $kategori->product()->paginate(12);
        } else {
            $books = null;
        }
        return view('book', [
            'title' => 'Book Page',
            'books' => $books
        ]);
    }
   
}
