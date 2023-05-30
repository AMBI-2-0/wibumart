<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class ClothingController extends Controller
{
    public function index()
    {
        $kategori = Kategori::where('kategori', 'Clothing')->first();
        if ($kategori) {
            $clothings = $kategori->product()->paginate(12);
        } else {
            $clothings = [];
        }
        return view('clothing', [
            'title' => 'Clothing Page',
            'clothings' => $clothings
        ]);
    }
}
