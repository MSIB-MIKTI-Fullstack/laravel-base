<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserResourceController extends Controller
{
    //untuk menampilan semua data user
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    //untuk membuat data baru
    public function create()
    {
        return view('users.create');
    }

    //menyimpan data yang baru dibuat
    public function store(Request $request)
    {
        User::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'email_verified_at' => now(),
            'password' => Hash::make($request -> password),
            'remember_token' => '123123',
        ]);

        return redirect() -> route('users.index');
    }

    
    public function show(string $id)
    {
        //
    }

    //untuk mengedit data
    public function edit(string $id)
    {
        $user = User::findOrFail($id);

        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'email_verified_at' => now(),
            'password' => Hash::make($request->password),
            'remember_token' => '123123',
        ]);

        return redirect() -> route('users.index');
    }

    //Untuk menghapus data
    public function destroy(string $id)
    {
        User::find($id) -> delete();

        return redirect() -> route('users.index');
    }
}
