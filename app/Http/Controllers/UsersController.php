<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $users = Cache::remember('cache_query_users', 3600, function () {
            return User::all();
        });
        return view('users.index', compact('users'));
    }
    

    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',

        ]);


        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password')); // Enkripsi password
        $user->save();


        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }


    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }


    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }


    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,

        ]);


        $user->update($request->all());

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully');
    }


    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }
}