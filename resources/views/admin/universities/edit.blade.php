@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Редактирование Университета</h2>

    {!! Form::model($item, ['method' => 'PATCH', 'route' => ['admin.universities.update', $item->id]]) !!}
    @include('admin.universities.form')
    {!! Form::close() !!}

@endsection