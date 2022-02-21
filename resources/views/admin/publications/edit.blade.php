@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Редактирование публикации</h2>

    {!! Form::model($publication, ['method' => 'PATCH', 'files' => true, 'route' => ['admin.publications.update', $publication->id]]) !!}
    @include('admin.publications.form')
    {!! Form::close() !!}

@endsection
