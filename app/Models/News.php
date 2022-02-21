<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class News extends Model implements HasMedia, TranslatableContract
{
    use HasFactory, Translatable, InteractsWithMedia;

    public $translatedAttributes = ['title', 'content'];
    protected $fillable = ['link', 'image', 'agenda_id', 'date', 'is_main', 'created_at'];

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function experts(){
        return $this->belongsToMany(Expert::class);
    }

    public function agenda(){
        return $this->belongsTo(Agenda::class);
    }
}