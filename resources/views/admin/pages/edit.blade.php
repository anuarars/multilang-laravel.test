@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Редактирование страницы</h2>

    {!! Form::model($item, ['method' => 'PATCH', 'route' => ['admin.pages.update', $item->id]]) !!}
    @include('admin.pages.form')
    {!! Form::close() !!}

@endsection
