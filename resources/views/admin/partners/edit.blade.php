@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Редактирование партнера</h2>

    {!! Form::model($item, ['method' => 'PATCH', 'files' => true, 'route' => ['admin.partners.update', $item->id]]) !!}
    @include('admin.partners.form')
    {!! Form::close() !!}

@endsection