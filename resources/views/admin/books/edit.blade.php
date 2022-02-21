@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Редактирование книги</h2>

    {!! Form::model($item, ['method' => 'PATCH', 'route' => ['admin.books.update', $item->id]]) !!}
    @include('admin.books.form')
    {!! Form::close() !!}

@endsection
