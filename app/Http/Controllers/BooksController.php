<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $authors = Author::all();

        return view('index', [
            "authors" => $authors
        ]);
    }

}
