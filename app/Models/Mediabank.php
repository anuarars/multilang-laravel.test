<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mediabank extends Model
{
    use HasFactory;

    protected $fillable = ['description','youtube', 'event_id', 'project_id', 'expert_id'];

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function event(){
        return $this->belongsTo(Event::class);
    }

    public function gallery(){
        return $this->hasMany(MediabankGallery::class);
    }
}
