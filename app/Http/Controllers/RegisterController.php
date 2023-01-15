<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function register(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ];

        $request->validate($rules);
        
        $userData = $request->only('name', 'email', 'password');
        $userData['password'] = bcrypt($userData['password']);

        if(!$user = $user->create($userData)) abort(500, "Error create a new user");

        return response()->json([
            'data' => [
                'user' => $user
            ],
        ]);
    }
}
