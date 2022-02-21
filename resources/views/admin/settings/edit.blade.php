@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Редактирование статичного контента</h2>

    {!! Form::model($item, ['method' => 'PATCH', 'route' => ['admin.settings.update', $item->id]]) !!}
    @include('admin.settings.form')
    {!! Form::close() !!}

@endsection
