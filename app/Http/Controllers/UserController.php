<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.adminUser', [
            'title' => 'Users',
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forms.createUser', [
            'title' => 'Create ',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $register)
    {
        $validatedData = $register->validate([
            'nama' => 'required|min:3| max:255',
            'username' => 'required|min:4|max:255',
            'password' => 'required|min:8|max:255',
            'alamat' => 'required|max:500',
            'is_admin' => 'required'
        ]);
        

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        session()->flash('success', 'User berhasil dibuat!');

        return redirect('/dashboard/users');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('dashboard.detailUser', [
            'title' => "User Page",
            'user' => User::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('forms.editUser',[
            'title' => 'Edit',
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user)
    {
        $validatedData = request()->validate([
            'nama' => 'min:3| max:255',
            'username' => 'min:4|max:255',
            'is_admin' => 'required',
            'alamat' => 'max:500'
        ]);

        User::where('id',$user->id)->update($validatedData);

        return redirect('/dashboard/users')->with('update', 'User berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user = User::find($user->id);
        $user->delete();

        return redirect('/dashboard/users')->with('delete', 'User berhasil dihapus!');
    }
}
