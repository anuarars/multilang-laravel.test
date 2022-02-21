@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Редактирование проекта</h2>

    {!! Form::model($item, ['method' => 'PATCH', 'files' => true, 'route' => ['admin.projects.update', $item->id]]) !!}
    @include('admin.projects.form')
    {!! Form::close() !!}

@endsection
