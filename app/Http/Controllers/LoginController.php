<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('forms.login',['title' => 'login page']);
    }

    public function authentication(Request $request){

        $cred = $request->validate([
            'username'=>'required',
            'password'=>'required'

        ]);

        if (Auth::attempt($cred)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('LoginError','Login Gagal!');

    }

    public function logout(Request $request){
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/home');
    }
}
