@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Добавление сотрудника</h2>

    {!! Form::open(array('route' => 'admin.teams.store', 'files' => true, 'method'=>'POST')) !!}
    @include('admin.teams.form')
    {!! Form::close() !!}

@endsection
