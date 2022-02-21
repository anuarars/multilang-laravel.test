@extends('layouts.app')

@section('meta_title')
    @lang('common.projects')
@endsection

@section('body')
<section class="projects pb200">
    <div class="container">
        <span class="italic">
            @lang('headers.global')
        </span>
        <h1 class="projects__title">
            @lang('headers.projects')
        </h1>
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-md-6">
                    <div class="projects-item">
                        <a href="{{route('projects.show', $project->id)}}">
                            <div class="projects-item__img">
                                <img src="{{$project->logo}}" alt="project 1">
                                <img src="{{$project->logo_hover}}" alt="project 1">
                            </div>
                        </a>
                        <strong class="projects-item__title">
                            {{$project->name}}
                        </strong>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
