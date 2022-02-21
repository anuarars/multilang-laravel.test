<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Expert extends Model implements HasMedia, TranslatableContract
{
    use HasFactory, Translatable, InteractsWithMedia;

    public $translatedAttributes = ['name', 'jobTitle', 'country', 'description'];

    public $fillable = ['victory_year', 'interview', 'works_link', 'image', 'cv', 'articles', 'is_show'];

    protected $with = ['translations'];

    public function news(){
        return $this->belongsToMany(News::class);
    }

    public function publications(){
        return $this->belongsToMany(Publication::class);
    }

    public function events(){
        return $this->belongsToMany(Event::class);
    }

    public function workfiles(){
        return $this->hasMany(Workfile::class);
    }

    public function projects(){
        return $this->belongsToMany(Project::class);
    }

    public function agendas(){
        return $this->belongsToMany(Agenda::class);
    }

    public function languages(){
        return $this->belongsToMany(Language::class);
    }

    public function universities(){
        return $this->belongsToMany(University::class);
    }

    public function degrees(){
        return $this->belongsToMany(Degree::class);
    }
}