<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Product;

class FigureController extends Controller
{
    public function index()
    {
        $kategori = Kategori::where('kategori', 'Figurine')->first();
        if ($kategori) {
            $figures = $kategori->product()->paginate(12);
        } else {
            $figures = null;
        }
        return view('figure_product', [
            'title' => 'Figurine Page',
            'figures' => $figures
        ]);
    }
}
