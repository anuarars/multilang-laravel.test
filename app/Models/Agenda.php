<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Agenda extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    public $translatedAttributes = ['name', 'description', 'short_description'];

    protected $fillable = ['image'];
    //    protected $with = ['translations'];

    protected $casts = [
        'event_id' => 'array',
        'publication_id' => 'array',
        'news_id' => 'array',
        'expert_id' => 'array',
    ];

    public function news(){
        return $this->hasMany(News::class);
    }

    public function publications(){
        return $this->hasMany(Publication::class);
    }

    public function events(){
        return $this->hasMany(Event::class);
    }

    public function experts(){
        return $this->belongsToMany(Expert::class);
    }
}
