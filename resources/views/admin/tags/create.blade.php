@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Добавить тег</h2>

    {!! Form::open(array('route' => 'admin.tags.store', 'method'=>'POST')) !!}
    @include('admin.tags.form')
    {!! Form::close() !!}

@endsection
