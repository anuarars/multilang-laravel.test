@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Редактирование эксперта</h2>

    {!! Form::model($expert, ['method' => 'PATCH', 'files' => true, 'route' => ['admin.experts.update', $expert->id]]) !!}
    @include('admin.experts.form')
    {!! Form::close() !!}

@endsection
