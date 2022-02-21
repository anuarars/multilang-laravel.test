@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Редактирование участника</h2>

    {!! Form::model($item, ['method' => 'PATCH', 'route' => ['admin.event-regs.update', $item->id]]) !!}
    @include('admin.event-regs.form')
    {!! Form::close() !!}

@endsection
