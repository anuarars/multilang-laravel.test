@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Редактирование тега</h2>

    {!! Form::model($item, ['method' => 'PATCH', 'route' => ['admin.tags.update', $item->id]]) !!}
    @include('admin.tags.form')
    {!! Form::close() !!}

@endsection
