<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Fetch all books
    public function index()
    {
        // Retrieve all books from the database
        $books = Book::all();

        // Pass books to the view
        return view('books.index', compact('books'));
    }
}
