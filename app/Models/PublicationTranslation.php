<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicationTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    // protected $table = 'publication_translations';
    protected $fillable = ['title', 'content'];
}
