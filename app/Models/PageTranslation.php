<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageTranslation extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = [
        'title', 'content', 'meta_title', 'meta_keywords', 'meta_description'
    ];
}
