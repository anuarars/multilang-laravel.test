<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Team extends Model implements HasMedia, TranslatableContract
{
    use HasFactory, Translatable, InteractsWithMedia;
    protected $fillable = ['email', 'position', 'image'];
    public $translatedAttributes = ['name', 'jobTitle'];

    public function project(){
        return $this->belongsToMany(Project::class);
    }
}
