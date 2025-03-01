<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Get the logged-in user
        $popularBooks = Book::orderBy('popularity', 'desc')->limit(11)->get();
        return view('dashboard', compact('user')) 
        ->with('popularBooks', $popularBooks);// Display the data to the dashboard
    }
}
