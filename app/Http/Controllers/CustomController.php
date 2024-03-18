<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CustomController extends Controller
{
    public function showData()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
}
