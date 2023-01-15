<?php

namespace App\Http\Controllers;

use App\BookStore;
use Illuminate\Http\Request;

class BookStoreController extends Controller
{
    //
    public function index()
    {
        return BookStore::all();
    }

    public function store(Request $request){
        BookStore::create($request->all());
    }

    public function show($id)
    {
        return BookStore::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $user = BookStore::findOrFail($id);
        $user->update($request->all());
    }

    public function destroy($id)
    {
        $user = BookStore::findOrFail($id);
        $user->delete();
    }
}
