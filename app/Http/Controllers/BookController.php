<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function create()
    {
        $category = Category::all();
        $author = Author::all();
        return view('create_books', compact('category', 'author'));
    }

    public function showHome()
    {
        $books=Book::join('categorys','categorys.category_id','=','books.category_id')
            ->join('authors','authors.author_id','=','books.author_id')
            ->get();
        return view('home',compact('books'));
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required|unique:books,name',
                'image' => 'required',
                'price' => 'required|min:4',
                'desc' => 'required'
            ],
            [
                'name.required' => 'Không được để trống',
                'name.unique' => 'Đã tồn tại san phẩm',
                'image.required' => 'Không được để trống',
                'price.required' => 'Không được để trống',
                'price.min' => 'Không đúng kiểu định dạng giá tiền',
                'desc.required' => 'Không được để trống'
            ]
        );
        $book = new Book();
        $book->name = $request->name;
        $image = $request->file('image');
        $newImage = $image->getClientOriginalname();
        $image->move('uploads', $newImage);
        $book->image = $newImage;
        $book->author_id = $request->author;
        $book->category_id = $request->category;
        $book->price = $request->price;
        $book->desc = $request->desc;
        $book->save();
        return redirect()->route('home');
    }
}
