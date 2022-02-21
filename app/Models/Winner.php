<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Winner extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    public $translatedAttributes = ['name', 'short_description', 'description'];
    protected $fillable = ['year','image', 'video', 'project_id', 'link'];

    public function work(){
        return $this->hasOne(Work::class);
    }
}
