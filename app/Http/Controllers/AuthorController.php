<?php

namespace App\Http\Controllers;

use App\Models\Author;

class AuthorController extends Controller
{
    public function index(Author $author)
    //public function author(Author $author)
    {
        return view('author', ['author' => $author]);
    }
}
