<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workfile extends Model
{
    use HasFactory;
    protected $fillable = ['expert_id', 'url'];

    public function expert(){
        return $this->belongsTo(Expert::class);
    }
}
