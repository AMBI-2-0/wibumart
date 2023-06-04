<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('forms.register', ['title' => 'registration page']);
    }

    public function store(Request $register)
    {
        $validatedData = $register->validate([
            'nama' => 'required|min:3| max:255',
            'email' => 'required|email|unique:users',
            'username' => 'required|min:4|max:255|unique:users',
            'password' => 'required|min:8|max:255',
            'alamat' => 'required|max:500'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        
        User::create($validatedData);

        session()->flash('success', 'Register berhasil');

        return redirect('/login');

    }
}
