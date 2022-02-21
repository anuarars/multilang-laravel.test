@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Редактирование Языка</h2>

    {!! Form::model($item, ['method' => 'PATCH', 'route' => ['admin.languages.update', $item->id]]) !!}
    @include('admin.languages.form')
    {!! Form::close() !!}

@endsection