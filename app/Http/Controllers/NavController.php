<?php

namespace App\Http\Controllers;

use App\Models\Book; 


class NavController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function blog()
    {
        return view('blog');
    }

    public function books()
    {
        $books = Book::get();
        return view('books' , ['books'=> $books]);
    }

    public function addBook()
    {
        return view('addBook');
    }

    public function infoBook()
    {
        return view('infoBook');
    }

}
