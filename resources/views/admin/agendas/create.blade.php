@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Создание повестки</h2>

    {!! Form::open(array('route' => 'admin.agendas.store', 'method'=>'POST', 'files' => true)) !!}
    @include('admin.agendas.form')
    {!! Form::close() !!}

@endsection
