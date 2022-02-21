@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Добавление победителя</h2>

    {!! Form::open(array('route' => 'admin.winners.store', 'files' => true, 'method'=>'POST')) !!}
    @include('admin.winners.form')
    {!! Form::close() !!}

@endsection
