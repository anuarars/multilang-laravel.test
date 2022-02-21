@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Редактирование новости</h2>

    {!! Form::model($item, ['method' => 'PATCH', 'files' => true, 'route' => ['admin.news.update', $item->id]]) !!}
    @include('admin.news.form')
    {!! Form::close() !!}

@endsection