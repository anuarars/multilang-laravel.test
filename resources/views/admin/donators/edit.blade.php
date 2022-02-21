@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Редактирование дарителя</h2>

    {!! Form::model($item, ['method' => 'PATCH', 'files' => true, 'route' => ['admin.donators.update', $item->id]]) !!}
    @include('admin.donators.form')
    {!! Form::close() !!}

@endsection