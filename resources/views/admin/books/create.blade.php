@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Добавить книгу</h2>

    {!! Form::open(array('route' => 'admin.books.store', 'files' => true, 'method'=>'POST')) !!}
    @include('admin.books.form')
    {!! Form::close() !!}

@endsection
