<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediabankGallery extends Model
{
    use HasFactory;

    protected $fillable = ['mediabank_id', 'url', 'type'];

    public function mediabank(){
        return $this->belongsTo(Mediabank::class);
    }
}