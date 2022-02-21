<?php

namespace App\Exports;

use App\Models\EventRegistration;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class EventRegistrationsExport implements FromQuery, WithMapping, WithHeadings
{
    use Exportable;

    public $event_id;

    public function __construct(int $event_id)
    {
        $this->event_id = $event_id;
    }

    public function query()
    {
        return EventRegistration::query()->where('event_id', '=', $this->event_id);
    }

    public function headings(): array
    {
        return [
            'Номер заявки',
            'Имя, Фамилия',
            'Организация',
            'Должность',
            'Телефон',
            'Почта',
            'Статус участия',
            'Статус оплаты'
        ];
    }

    public function map($registration): array
    {
        $confirmed = 'Пойдет';

        if ($registration->confirmed == 0) {
            $confirmed = 'Не пойдет';
        }

        if (is_null($registration->confirmed)) {
            $confirmed = 'Участник не подтвержден';
        }
        return [
            $registration->id,
            $registration->name,
            $registration->surname,
            $registration->position,
            $registration->phone,
            $registration->email,
            $confirmed,
            $registration->payed? 'Оплачено' : 'Не оплачено'
        ];
    }
}
