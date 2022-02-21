@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Регистрация</h2>

    {!! Form::open(array('route' => 'admin.event-regs.store', 'method'=>'POST', 'files' => true)) !!}
    @include('admin.event-regs.form')
    {!! Form::close() !!}

@endsection
