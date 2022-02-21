@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Создание страницы</h2>

    {!! Form::open(array('route' => 'admin.pages.store', 'method'=>'POST')) !!}
    @include('admin.pages.form')
    {!! Form::close() !!}

@endsection
