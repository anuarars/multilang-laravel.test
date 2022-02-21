@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Редактирование типа публикации</h2>

    {!! Form::model($item, ['method' => 'PATCH', 'route' => ['admin.publication_types.update', $item->id]]) !!}
    @include('admin.publication_types.form')
    {!! Form::close() !!}

@endsection
