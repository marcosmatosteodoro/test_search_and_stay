<?php

namespace App\Http\Controllers;

use App\BookStore;
use Illuminate\Http\Request;

class BookStoreController extends Controller
{
    //
    public function index()
    {
        return response()->json([ "data"=> BookStore::all()], 200); 
    }

    public function store(Request $request, BookStore $bookStore){

        $rules = [
            'name' => 'required|min:3',
            'ISBN' => 'required|min:5',
            'value' => 'required|min:3',
        ];

        $request->validate($rules);
        
        $bookStoreData = $request->only('name', 'ISBN', 'value');

        $bookStore->create($bookStoreData);

        return response()->json([ "message"=> "Registration created successfully."], 201); 
    }

    public function show($id)
    {
        return response()->json([ "data"=> BookStore::findOrFail($id)], 200); 
    }

    public function update(Request $request, $id)
    {
        $user = BookStore::findOrFail($id);
        $user->update($request->all());
        return response()->json([ "message"=> "Registration updated successfully."], 200); 
    }

    public function destroy($id)
    {
        $user = BookStore::findOrFail($id);
        $user->delete();
        return response()->json([ "message"=> "Registration deleted successfully."], 200); 
    }
}
