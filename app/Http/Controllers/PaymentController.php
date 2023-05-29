<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
        public function index()
        {
        $payment_items = [
            ['quantity' => '1 unit', 'name' => 'soeharto', 'date' => '15/01/23', 'method' => 'Visa' , 'price' => 500000,  'release_date' => 'Release January 2023', 'product' => 'Action Figure'],
        ];

        return view('payment', ['title' => 'Patment Page', 'payment_items' => $payment_items]);
    }
}