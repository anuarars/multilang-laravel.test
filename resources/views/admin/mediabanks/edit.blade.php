@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Редактирование Медиа</h2>

    {!! Form::model($mediabank, ['method' => 'PATCH', 'files' => true, 'route' => ['admin.mediabanks.update', $mediabank->id]]) !!}
    @include('admin.mediabanks.form')
    {!! Form::close() !!}

@endsection