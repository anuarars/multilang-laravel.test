@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Редактирование Диплома</h2>

    {!! Form::model($item, ['method' => 'PATCH', 'route' => ['admin.degrees.update', $item->id]]) !!}
    @include('admin.degrees.form')
    {!! Form::close() !!}

@endsection