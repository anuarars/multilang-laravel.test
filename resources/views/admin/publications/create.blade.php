@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Добавление публикации</h2>

    {!! Form::open(array('route' => 'admin.publications.store', 'method'=>'POST', 'files' => true)) !!}
    @include('admin.publications.form')
    {!! Form::close() !!}

@endsection
