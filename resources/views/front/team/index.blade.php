@extends('layouts.app')

@section('meta_title')
@lang('common.our-team')
@endsection

@section('body')
<section class="our-team pb200">
    <div class="container">
        <ul class="breadcrumbs list-reset">
            <li>
                <a href="{{route('pages.show', ['path' => 'about'])}}">@lang('page.about')</a>
            </li>
            <li>
                <a href="{{route('pages.show', ['path' => 'people'])}}">@lang('menu.people')</a>
            </li>
            <li>
                @lang('menu.team')
            </li>
        </ul>
        <div class="our-team__head">
            <span class="italic">
                @lang('headers.professionals')
            </span>
            <h1 class="our-team__title">
                @lang('headers.team')
            </h1>
        </div>
        <div class="row our-team__row">
            @foreach ($team->take(3) as $staff)
            <div class="col-sm-4 our-team__col">
                <article class="teammate">
                    <div class="teammate__image">
                        <picture>
                            <img src="{{$staff->image}}" alt="Ekaterina Salugina-Sorokovaya">
                        </picture>
                        <picture>
                            <img src="{{$staff->image_hover}}" alt="about image">
                        </picture>
                    </div>
                    <div class="teammate__bottom">
                        <strong class="teammate__name">
                            {{$staff->name}}
                        </strong>
                        <span class="teammate__info gray">
                            {{$staff->jobTitle}}
                        </span>
                        <a href="mailto:ekaterina_salugina@iclrc.ru" class="teammate__mail gray">{{$staff->email}}</a>
                    </div>
                </article>
            </div>
            @endforeach

            @foreach ($team->take(-($teamCount-3)) as $staff)
            <div class="col-sm-3 our-team__col">
                <article class="teammate">
                    <div class="teammate__image">
                        <picture>
                            <img src="{{$staff->image}}" alt="Ekaterina Salugina-Sorokovaya">
                        </picture>
                        <picture>
                            <img src="{{$staff->image_hover}}" alt="about image">
                        </picture>
                    </div>
                    <div class="teammate__bottom">
                        <strong class="teammate__name">
                            {{$staff->name}}
                        </strong>
                        <span class="teammate__info gray">
                            {{$staff->jobTitle}}
                        </span>
                        <a href="mailto:victoria_manko@iclrc.ru" class="teammate__mail gray">{{$staff->email}}</a>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
