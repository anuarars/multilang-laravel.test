<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicationGallery extends Model
{
    use HasFactory;
    protected $fillable = ['publication_id', 'url'];
    
    public function publication(){
        return $this->belongsTo(Publication::class);
    }
}
