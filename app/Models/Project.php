<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Project extends Model implements HasMedia, TranslatableContract
{
    use HasFactory, Translatable, InteractsWithMedia;

    public $translatedAttributes = ['name', 'description', 'contacts', 'terms', 'fee', 'scholarship', 'other_information', 'schedule'];

    protected $fillable = ['award', 'datetimes', 'council', 'logo', 'agenda_id', 'announcement_competition', 'announcement_result'];
//    protected $with = ['translations'];

    public $casts = [
        'council' => 'json',
    ];

    public function mediabanks(){
        return $this->belongsToMany(Mediabank::class);
    }

    public function experts(){
        return $this->belongsToMany(Expert::class);
    }

    public function team(){
        return $this->belongsToMany(Team::class);
    }

    public function agenda(){
        return $this->belongsTo(Agenda::class);
    }
}
