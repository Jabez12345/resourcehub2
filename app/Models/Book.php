<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Specify the table name
    protected $table = 'books';

    // Add fillable fields
    protected $fillable = ['course_code','course_title'];
}
