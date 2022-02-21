@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Добавление эксперта</h2>

    {!! Form::open(array('route' => 'admin.experts.store', 'files' => true, 'method'=>'POST')) !!}
    @include('admin.experts.form')
    {!! Form::close() !!}

@endsection
