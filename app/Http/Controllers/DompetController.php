<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DompetController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('dompet_digital', [
            "user" => $user
        ]);
    }

    public function saldo(Request $request)
    {
        $jumlah = $request->input('jumlah');
        $action = $request->input('action');

        if ($action === 'tambah') {
            $duit = Auth::user()->duit + $jumlah;
            Auth::user()->update(['duit' => $duit]);
            return redirect('dompet-digital')->with('tambahSaldo', 'Top Up Berhasil!');
        } elseif ($action === 'tarik') {
            $duit = Auth::user()->duit - $jumlah;
            Auth::user()->update(['duit' => $duit]);

            return redirect('dompet-digital')->with('kurangSaldo', 'Penarikan Berhasil!');
        }
    }
}
