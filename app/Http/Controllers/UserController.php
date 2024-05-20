<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Js;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show($id){

        $users = User::find($id);
        
        // $users = User::all();
         dd($users);
        return view('user.view', compact('users'));

        if (Auth::id()){
            $usertype = Auth::user()->usertype;
            if ($usertype == 'user') {
                return view('customers.home');
            } else if ($usertype == 'admin'){
                return view('users.layout.index');
            } else {
                return redirect()->back();
            }
    
           }
    }  
}

