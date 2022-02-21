<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket', 'name', 'surname', 'date_visit', 'time_visit', 'books', 'locale'
    ];
}
