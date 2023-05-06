<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;

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
            'username' => 'required|min:4|max:20',
            'password' => 'required|min:8|max:20',
            'alamat' => 'required',
            'gambar_profile' => [
                File::image()
                    ->min(1024)
                    ->max(12 * 1024)
            ],
        ]);

        User::create($validatedData);
    }
}
