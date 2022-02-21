<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Event extends Model implements HasMedia, TranslatableContract
{
    use HasFactory, Translatable, InteractsWithMedia;

    const NOT_REGISTERED = 'not-registered';
    const REGISTERED = 'registered';
    const PAYED = 'payed';

    const TYPES = ['Могут регистрироваться все желающие', 'Требуется ручное одобрение администратором', 'Платное мероприятие'];
    const FORMAT_TYPES = ['Онлайн', 'Онлайн и оффлайн', 'Только оффлайн'];
    const COST_TYPES = ['Бесплатно для всех', 'Бесплатно для студентов – необходимо загрузить студенческий билет. Для остальных платно.', 'Платно'];
    const REG_TYPES = ['Могут регистрироваться все желающие', 'Требуется ручное одобрение администратором', 'Платное мероприятие'];

    public $translatedAttributes = [
        'title', 'description', 'location', 'meta_title', 'meta_keywords', 'meta_description', 'city'
    ];

    protected $fillable = [
        'type', 'format', 'cost_types', 'access', 'reg_types', 'types',
        'agendas', 'youtube', 'other_link', 'datetimes', 'image', 'agenda_id', 'is_main', 'stream', 'date_start', 'date_end'
    ];

    public function experts(){
        return $this->belongsToMany(Expert::class);
    }

    public function agenda()
    {
        return $this->belongsTo(Agenda::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function mediabanks(){
        return $this->belongsToMany(Mediabank::class);
    }

    public function gallery(){
        return $this->hasMany(EventGallery::class);
    }

    public static function getShowFormatTypes()
    {
        return [
            0 => ['ru' => 'Онлайн', 'en' => 'Online'],
            1 => ['ru' => 'Онлайн и оффлайн', 'en' => 'Online and offline'],
            2 => ['ru' => 'Только оффлайн', 'en' => 'Offline only'],
        ];
    }

    public static function getShowCostTypes()
    {
        return [
            0 => ['ru' => 'Бесплатно для всех', 'en' => 'Free for everyone'],
            1 => ['ru' => 'Бесплатно для студентов, необходимо загрузить студенческий билет. Для остальных - платно',
                'en' => 'Free for students, student ID must be downloaded. For the rest - paid'],
            2 => ['ru' => 'Платно', 'en' => 'Paid'],
        ];
    }

    public function type(){
        return $this->belongsTo(EventType::class);
    }

    public function materials(){
        return $this->hasMany(EventMaterial::class);
    }
}