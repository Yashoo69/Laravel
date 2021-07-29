<?php

namespace App\Http\Controllers;


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
        return view('books');
    }
}
