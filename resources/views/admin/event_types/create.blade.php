@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Добавить тип мероприятия</h2>

    {!! Form::open(array('route' => 'admin.event_types.store', 'method'=>'POST',  'files' => true)) !!}
    @include('admin.event_types.form')
    {!! Form::close() !!}

@endsection