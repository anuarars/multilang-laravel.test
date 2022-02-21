@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Создание новости</h2>

    {!! Form::open(array('route' => 'admin.news.store', 'method'=>'POST', 'files' => true)) !!}
    @include('admin.news.form')
    {!! Form::close() !!}

@endsection
