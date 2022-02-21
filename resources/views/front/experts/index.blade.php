@extends('layouts.app')

@section('meta_title')
@lang('common.expertss')
@endsection

@section('body')
    <section class="our-team pb200">
        <div class="container">
            <ul class="breadcrumbs list-reset">
                <li>
                    <a href="{{route('pages.show', ['path' => 'about'])}}">@lang('menu.about')</a>
                </li>
                <li>
                    <a href="{{route('pages.show', ['path' => 'people'])}}">@lang('menu.people')</a>
                </li>
                <li>
                    @lang('page.speaker_expert')
                </li>
            </ul>
            <div class="our-team__head">
                <span class="italic">
                    @lang('headers.notable')
                </span>
                <h1 class="our-team__title titleObserver">
                    @lang('headers.speakers')
                </h1>
                <p class="our-team__text">
                   @lang('page.speaker_description')
                </p>
            </div>
            <div class="row our-team__row">
                @foreach ($experts as $expert)
                    <div class="col-md-3 our-team__col">
                        <article class="teammate">
                            <a href="{{route('experts.show', $expert->id)}}">
                                <div class="teammate__image">
                                    <picture>
                                        <img src="{{$expert->image}}"
                                        alt="{{$expert->image}}">
                                    </picture>
                                    <picture>
                                      <img src="{{$expert->image_hover}}">
                                    </picture>
                                </div>
                            </a>
                            <div class="teammate__bottom">
                                <strong class="teammate__name">
                                    {{$expert->name}}
                                </strong>
                                {{-- <span class="teammate__info gray">
                                    {{$expert->country}}
                                </span> --}}
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
