@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Создание мероприятия</h2>

    {!! Form::open(array('route' => 'admin.events.store', 'files' => true, 'method'=>'POST')) !!}
    @include('admin.events.form')
    {!! Form::close() !!}

@endsection
