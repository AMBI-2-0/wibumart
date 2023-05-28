<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class AccessoriesController extends Controller
{
    public function index()
    {
        $kategori = Kategori::where('kategori', 'Accessories')->first();
        if ($kategori) {
            $accessoriess = $kategori->product()->paginate(12);
        } else {
            $accessoriess = [];
        }
        return view('accessories', [
            'title' => 'Accessories Page',
            'accessoriess' => $accessoriess
        ]);
    }
}
