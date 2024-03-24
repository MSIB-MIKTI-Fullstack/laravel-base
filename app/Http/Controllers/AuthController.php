<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return 'Coming Soon..';
    }

    public function login(Request $request)
    {
        if ($request->only('email', 'password')) {

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->route('admin.mahasiswa.index');
            }

            return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
        }

        return view('auth.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function forgotPassword()
    {
        return 'Coming Soon..';
    }
}
