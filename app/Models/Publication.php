<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Publication extends Model implements TranslatableContract, HasMedia
{
    use HasFactory, Translatable, InteractsWithMedia;
    public $translatedAttributes = ['title', 'content'];
    public $fillable = ['publication_type_id', 'agenda_id', 'image', 'is_main', 'created_at', 'file'];

    public function type(){
        return $this->belongsTo(PublicationType::class, 'publication_type_id', 'id');
    }
    public function agenda(){
        return $this->belongsTo(Agenda::class);
    }

    public function experts(){
        return $this->belongsToMany(Expert::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function gallery(){
        return $this->hasMany(PublicationGallery::class);
    }
}
