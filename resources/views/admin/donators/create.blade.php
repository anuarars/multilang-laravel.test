@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Добавить Дарителя</h2>

    {!! Form::open(array('route' => 'admin.donators.store', 'method'=>'POST', 'files' => true)) !!}
    @include('admin.donators.form')
    {!! Form::close() !!}

@endsection