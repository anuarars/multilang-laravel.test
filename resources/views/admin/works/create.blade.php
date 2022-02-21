@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Добавление победителя</h2>

    {!! Form::open(array('route' => 'admin.works.store', 'method'=>'POST', 'files' => true)) !!}
    @include('admin.works.form')
    {!! Form::close() !!}

@endsection
