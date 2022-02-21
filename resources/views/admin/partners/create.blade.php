@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Создание новости</h2>

    {!! Form::open(array('route' => 'admin.partners.store', 'method'=>'POST', 'files' => true)) !!}
    @include('admin.partners.form')
    {!! Form::close() !!}

@endsection
