@extends('layouts.view')

@section('meta_title', $page->meta_title ?: $page->title)
@section('meta_keywords', $page->meta_keywords)
@section('meta_description', $page->meta_description)

@section('link-back')
<div style="position: absolute; height:40px; width: 100%; background-color: #000;opacity: 0.7; color: #fff; display:flex; justify-content: start; align-items:center;">
    <a href="{{route('admin.pages.index', $page->id)}}" style="color:#fff; font-size: 20px; text-decoration: none; margin-left: 10px;">Назад</a>
</div>
@endsection

@section('body')
    <div class="container">
        {!! $page->translate('ru')->content !!}
    </div>
@endsection