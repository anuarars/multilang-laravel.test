<?php

namespace App\Exports;

use App\Model\LawRockRegistration;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class BandMembersExport implements FromQuery, WithMapping, WithHeadings
{
    use Exportable;

    public $band_id;

    public function __construct(int $band_id)
    {
        $this->band_id = $band_id;
    }

    public function query()
    {
        return LawRockRegistration::query()->where('band_id', '=', $this->band_id);
    }

    public function headings(): array
    {
        return [
            'Номер заявки',
            'Группа',
            'Имя, Фамилия',
            'Организация',
            'Должность',
            'Почта',
            'Телефон',
            'Инструменты',
            'Предпочтительный способ связи',
            'Контактное лицо?'
        ];
    }

    public function map($registration): array
    {
        $isContact = $registration->is_contact? 'Да' : 'Нет';

        return [
            $registration->id,
            $registration->band->bandname,
            $registration->name . ' ' . $registration->surname,
            $registration->company,
            $registration->position,
            $registration->email,
            $registration->phone,
            $registration->instruments,
            $registration->preferred_communication,
            $isContact,
        ];
    }
}
