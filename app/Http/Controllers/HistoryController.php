<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->input('status');
        $query = History::query();

        if ($status) {
            $query->where('status', $status);
        }

        $History = $query->orderBy('ordered_at', 'desc')->get();
        $title = 'Purchase History'; 

        return view('history', compact('History', 'title'));
    }

    

}

