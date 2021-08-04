<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function create()
    {
        return view('create_books');
    }

    public function store(Request $request)
    {
        $book=new Book();
        $book->name=$request->name
    }
}
