@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Добавить Университет</h2>

    {!! Form::open(array('route' => 'admin.universities.store', 'method'=>'POST')) !!}
    @include('admin.degrees.form')
    {!! Form::close() !!}

@endsection