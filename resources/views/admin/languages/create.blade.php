@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Добавить Язык</h2>

    {!! Form::open(array('route' => 'admin.languages.store', 'method'=>'POST')) !!}
    @include('admin.languages.form')
    {!! Form::close() !!}

@endsection