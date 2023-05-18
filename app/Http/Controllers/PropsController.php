<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropsController extends Controller
{
    public function index()
    {
        return view('props', ['title' => 'Props Page']);
    }
}
