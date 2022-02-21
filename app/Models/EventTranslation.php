<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'title', 'description', 'location', 'meta_title', 'meta_keywords', 'meta_description', 'city', 'duration'
    ];

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'event_translations.title' => 10,
            'event_translations.description' => 10,
        ],
    ];
}
