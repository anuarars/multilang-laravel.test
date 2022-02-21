@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Добавить тип публикации</h2>

    {!! Form::open(array('route' => 'admin.publication_types.store', 'method'=>'POST')) !!}
    @include('admin.publication_types.form')
    {!! Form::close() !!}

@endsection
