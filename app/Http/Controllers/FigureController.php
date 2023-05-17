<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FigureController extends Controller
{
    public function index()
    {

        return view('figure_product', ['title' => 'Figure Product']);
    }
}
