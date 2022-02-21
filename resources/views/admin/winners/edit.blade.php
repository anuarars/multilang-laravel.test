@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Редактирование победителя</h2>

    {!! Form::model($item, ['method' => 'PATCH', 'files' => true, 'route' => ['admin.winners.update', $item->id]]) !!}
    @include('admin.winners.form')
    {!! Form::close() !!}

@endsection