<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class PropsController extends Controller
{
    public function index()
    {
        $kategori = Kategori::where('kategori', 'Props')->first();
        if ($kategori) {
            $propss = $kategori->product()->paginate(12);
        } else {
            $propss = null;
        }
        return view('props', [
            'title' => 'Props Page',
            'propss' => $propss
        ]);
    }
}
