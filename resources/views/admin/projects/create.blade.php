@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Создание проекта</h2>

    {!! Form::open(array('route' => 'admin.projects.store', 'method'=>'POST', 'files' => true)) !!}
    @include('admin.projects.form')
    {!! Form::close() !!}

@endsection
