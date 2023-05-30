<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FigurineController extends Controller
{
    public function index()
    {
        return view('figurine', ['title' => 'Figurine']);
    }
}
