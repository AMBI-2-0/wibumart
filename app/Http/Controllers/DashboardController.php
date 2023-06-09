<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user=User::count('id');
        $products=Product::count('id');
        return view('dashboard.dashboard', ['title' => 'Dashboard','user'=>$user,'products'=>$products]);
        

    }
}
