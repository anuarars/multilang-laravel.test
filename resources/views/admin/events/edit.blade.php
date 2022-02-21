@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Редактирование мероприятия</h2>

    {!! Form::model($item, ['method' => 'PATCH', 'route' => ['admin.events.update', $item->id], 'files' => true,]) !!}
    @include('admin.events.form')
    {!! Form::close() !!}

    <script>
        var date_start = "{{ Date::parse(explode('-', $item->datetimes)[0])->format('Y-m-d') }}"
        var time_start =  "{{ Date::parse(explode('-', $item->datetimes)[0])->format('H:i') }}"
        var date_end = "{{ Date::parse(explode('-', $item->datetimes)[1])->format('Y-m-d') }}"
        var time_end =  "{{ Date::parse(explode('-', $item->datetimes)[1])->format('H:i') }}"
    
        $('input[name="datetimes"]').daterangepicker({
            timePicker: true,
            startDate: moment(date_start + ' ' + time_start),
            endDate: moment(date_end + ' ' + time_end),
            timePicker24Hour: true,
            locale: {
                format: 'YYYY/MM/DD H:mm'
            }
        });
    </script>

@endsection
