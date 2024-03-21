<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Js;

class UserController extends Controller
{
    public function show($id){

        $users = User::find($id);
        
        // $users = User::all();
         dd($users);
        return view('user.view', compact('users'));
    }
}
