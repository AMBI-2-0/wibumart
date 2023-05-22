<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        
        $purchases = [
            [
                'kategori' => 'Props',
                'keterangan' => 'Figur Bailu 15 januari 2023',
                'status' => 'Dibatalkan',
            ],
            [   'kategori' => 'Props',
                'keterangan' => 'Figur aja 15 januari 2023',
                'status' => 'Berlangsung',
            ],
            [   'kategori' => 'Props',
                'keterangan' => 'baju bailu, 16 januari 2022',
                'status' => 'Selesai',
            ],
        ];
    
        return view('history',['title' => 'History Page', 'purchases' => $purchases]);
    }
    

}

