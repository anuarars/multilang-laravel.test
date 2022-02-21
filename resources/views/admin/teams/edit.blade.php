@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Редактирование сотрудника</h2>

    {!! Form::model($team, ['method' => 'PATCH', 'files' => true, 'route' => ['admin.teams.update', $team->id]]) !!}
    @include('admin.teams.form')
    {!! Form::close() !!}

@endsection