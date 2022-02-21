@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Редактирование темы повестки</h2>

    {!! Form::model($item, ['method' => 'PATCH', 'route' => ['admin.agendas.update', $item->id], 'files' => true]) !!}
    @include('admin.agendas.form')
    {!! Form::close() !!}

@endsection
