<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id', 'name', 'surname', 'organization', 'phone', 'email', 'file', 'jobTitle'
    ];

    protected $with = [
        'event'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
