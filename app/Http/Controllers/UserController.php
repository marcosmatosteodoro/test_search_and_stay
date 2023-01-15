<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        return response()->json([ "data"=> User::all()], 200); 
    }

    public function store(Request $request, User $user){
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ];

        $request->validate($rules);
        
        $userData = $request->only('name', 'email', 'password');
        $userData['password'] = bcrypt($userData['password']);
        
        $user->create($userData);
        return response()->json([ "message"=> "User created successfully."], 201); 
    }

    public function show($id)
    {
        return response()->json([ "data"=> User::findOrFail($id)], 200); 
        
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json([ "message"=> "User updated successfully."], 200); 
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json([ "message"=> "User deleted successfully."], 200); 
    }
}
