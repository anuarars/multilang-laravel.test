<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpertTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'expert_translations';
    protected $fillable = ['name','jobTitle', 'country', 'description'];
}
