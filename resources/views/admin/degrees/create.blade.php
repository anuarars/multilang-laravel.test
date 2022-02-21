@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Добавить Диплом</h2>

    {!! Form::open(array('route' => 'admin.degrees.store', 'method'=>'POST')) !!}
    @include('admin.degrees.form')
    {!! Form::close() !!}

@endsection