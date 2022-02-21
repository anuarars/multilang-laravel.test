@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Действующее мероприятие</h2>

    {!! Form::model($currentEvent, ['method' => 'POST', 'route' => ['admin.current-event.store']]) !!}
    @include('admin.current-events.form')
    {!! Form::close() !!}

@endsection