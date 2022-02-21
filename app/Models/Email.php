<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Email extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $timestamps = false;

    public $translatedAttributes = [
        'mail_text'
    ];

    protected $fillable = [
        'type',
    ];

    public function parse($data)
    {
        $parsed = preg_replace_callback('/{{(.*?)}}/', function ($matches) use ($data) {
            list($shortCode, $index) = $matches;
            if (isset($data[$index])) {
                return $data[$index];
            } else {
//                throw new Exception("Shortcode {$shortCode} not found in template id {$this->id}", 1);
            }

        }, $this->mail_text);

        return $parsed;
    }
}
