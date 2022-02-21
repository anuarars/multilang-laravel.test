@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Редактирование победителя</h2>

    {!! Form::model($item, ['method' => 'PATCH', 'files' => true, 'route' => ['admin.works.update', $item->id]]) !!}
    @include('admin.works.form')
    {!! Form::close() !!}

@endsection