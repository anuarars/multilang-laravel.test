@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Создание Медиа</h2>

    {!! Form::open(array('route' => 'admin.mediabanks.store', 'method'=>'POST', 'files' => true)) !!}
    @include('admin.mediabanks.form')
    {!! Form::close() !!}

@endsection