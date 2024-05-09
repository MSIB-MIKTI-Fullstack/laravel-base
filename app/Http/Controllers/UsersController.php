<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
=======
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
>>>>>>> origin/rafa

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        $users = Cache::remember('cache_query_users', 3600, function () {
            return User::all();
        });

        return view('users.index', compact('users'));
=======
        $users = User::all();
        return view('user/user', compact('users'));
>>>>>>> origin/rafa
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        return view('users.create');
=======
       return view('user/create');
>>>>>>> origin/rafa
    }

    /**
     * Store a newly created resource in storage.
     */
<<<<<<< HEAD
    public function store(StoreUserRequest $request)
=======
    public function store(Request $request)
>>>>>>> origin/rafa
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'email_verified_at' => now(),
            'password' => Hash::make($request->password),
<<<<<<< HEAD
            'remember_token' => '123123',
        ]);

        Cache::forget('users');

        return redirect()->back()->with('success', "User berhasil ditambahkan");
=======
            'remember_token' => "12312312312312123123",
        ]);

        return redirect()->route('users.index');
>>>>>>> origin/rafa
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
<<<<<<< HEAD
        $user = User::findOrFail($id);

        return view('users.edit', compact('user'));
=======
        $users= User::findorFail($id);
        return view('user/edit', compact('users'));
>>>>>>> origin/rafa
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
<<<<<<< HEAD
        User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'email_verified_at' => now(),
            'password' => Hash::make($request->password),
            'remember_token' => '123123',
        ]);

        Cache::forget('cache_query_users');

=======
        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

>>>>>>> origin/rafa
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
<<<<<<< HEAD
        User::find($id)->delete();

        Cache::forget('users');

        return redirect()->route('users.index');
=======
        $users = User::where('id', $id)->delete();
        return redirect()->route('users.index');

>>>>>>> origin/rafa
    }
}
