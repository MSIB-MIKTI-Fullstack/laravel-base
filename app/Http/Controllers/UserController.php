<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index();
    {
        $user = User::all();
        return view('user.index', compact('user'));
    }
}

/**
 * Show the form for creating a new resource.
 */
public function create()
{
    return view('user.create');
}

/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'email_verified_at' => now(),
        'password' => Hash::make($request->password),
        'remember_token' => '1111111',
    ]);

    return redirect()->back();
}

/**
 * Display the specified resource.
 */
public function show(string $id)
{
    //
}

/**
 * Show the form for editing the specified resource.
 */
public function edit(string $id)
{
    $user = User::findOrfail($id);
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
        'remember_token' => '1111111',
    ]);

    return redirect()->route('users.index');
}

/**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    User::find($id)->delete();
    return redirect()->route('user.index');

}
