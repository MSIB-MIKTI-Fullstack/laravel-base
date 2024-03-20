<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function show($id){
   $user = User::findOrFail($id);
   $users = User::all();
   return view('users.view', compact('user'));
   }
   public function update(Request $request, $id) {
    $user = User::find($id)->update([
        'name' => $request->name,
    ]);
    return redirect()->back();
   }
}
