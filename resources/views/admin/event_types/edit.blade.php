@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Редактирование типа мероприятия</h2>

    {!! Form::model($item, ['method' => 'PATCH', 'files' => true, 'route' => ['admin.event_types.update', $item->id]]) !!}
    @include('admin.event_types.form')
    {!! Form::close() !!}

@endsection
