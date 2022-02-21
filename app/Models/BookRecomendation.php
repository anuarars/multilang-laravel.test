<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class BookRecomendation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'occupation',
        'book',
        'link',
        'author',
        'year',
    ];

    protected $guarded = [];
    // protected $dates = ['created_at'];

    // public function setDateAttribute($value)
    // {
    //     $this->attributes['created_at'] = $value instanceof Carbon ? $value : Carbon::createFromFormat('d.m.Y', $value);
    // }
}