<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\DashboardController;



Route::get('/', function () {
    return view('index');
});


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/dashboard', [DashboardController::class, 'index'])->name('auth.dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');


Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate(); // Clear user session
    $request->session()->regenerateToken(); // Regenerate token
    return redirect('/login'); // Redirect to login
})->name('logout');

Route::get('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate(); // Clear user session
    $request->session()->regenerateToken(); // Regenerate token
    return redirect('/login'); // Redirect to login
})->name('logout');

Route::get('/api/search-books', function (Request $request) {
    $query = $request->query('q', ''); // Get the query string

    // Search in the database by course title or course code
    $books = Book::where('course_title', 'like', '%' . $query . '%')
        ->orWhere('course_code', 'like', '%' . $query . '%')
        ->take(10) // Limit to 10 results
        ->get(['id', 'course_title', 'course_code']); // Only fetch id, course_title, and course_code

    return response()->json($books); // Return JSON response
});


Route::get('/books/{id}', function ($id) {
    $book = Book::find($id);

    if (!$book) {
        abort(404); // Show a 404 error if the book is not found
    }

    return view('show', ['book' => $book]);
})->name('book.details');


Route::get('/books/{id}/download', function ($id) {
    $book = Book::findOrFail($id);
    
    // Increment the popularity counter
    $book->increment('popularity');

    // Serve the file for download
    return response()->download(storage_path("app/public/{$book->file_path}"));
});

Route::get('/', function () {
    $popularBooks = Book::orderBy('popularity', 'desc')->limit(11)->get(); // Fetch top 11 popular books
    return view('index', ['popularBooks' => $popularBooks]); // Display the data to the main/index view
});

Route::get('/upload', function () {
    return view('upload'); // Make sure the upload view exists in resources/views/upload.blade.php
})->middleware('auth')->name('upload');
