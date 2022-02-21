<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Tag extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    public $translatedAttributes = ['name'];

    public function news(){
        return $this->belongsToMany(News::class);
    }

    public function publications(){
        return $this->belongsToMany(Publication::class);
    }

    public function events(){
        return $this->belongsToMany(Event::class);
    }
}
