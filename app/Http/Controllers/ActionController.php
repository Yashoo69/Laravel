<?php

namespace App\Http\Controllers;


use App\Models\Book;


class ActionController extends Controller
{
    public function addbook() {

        $book = new Book;
        $book->title = $_GET['title'];
        $book->author = $_GET['author'];
        $book->publication_year = $_GET['publication_year'];
        $book->genre = $_GET['genre'];
        $book->synopsis = $_GET['synopsis'];
    
        $book->save();
        return redirect('/books');
    
    }
}
