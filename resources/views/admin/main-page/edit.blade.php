@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Редактирование статичного контента</h2>

    {!! Form::model($item, ['method' => 'PATCH', 'route' => ['admin.main-page.update', $item->id]]) !!}
    @include('admin.main-page.form')
    {!! Form::close() !!}

@endsection