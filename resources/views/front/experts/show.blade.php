@extends('layouts.app')

@section('meta_title')
{{$expert->name}}
@endsection

@section('body')
<section class="ep pb200">
    <div class="container">
        <ul class="breadcrumbs list-reset">
            <li>
                <a href="{{route('pages.show', ['path' => 'about'])}}">@lang('page.about')</a>
            </li>
            <li>
                <a href="{{route('pages.show', ['path' => 'people'])}}">@lang('menu.people')</a>
            </li>
            <li>
                <a href="{{route('experts.index')}}">@lang('page.speaker_expert')</a>
            </li>
            <li>
                {{$expert->name}}
            </li>
        </ul>
        <div class="row ep__row justify-content-between">
            <div class="col-md-8">
                <strong class="ep__title titleObserver">
                    {{$expert->name}}
                </strong>
                <p class="ep__text serif-big">
                    {!!$expert->description!!}
                </p>
            </div>
            <div class="col-md-3">
                <aside class="ep-aside">
                    <strong class="ep__title ep__title--mobile">
                        {{$expert->name}}
                    </strong>
                    <img class="ep-aside__img" src="{{$expert->image}}" srcset="{{$expert->image}}"
                        alt="{{$expert->image}}">
                    {{-- <div class="ep-aside__item">
                        <span class="ep-aside__title">
                            Title
                        </span>
                        <p class="ep-aside__text">
                            Dr. (Mr.)
                        </p>
                    </div> --}}
                    @if (count($expert->languages) > 0)
                        <div class="ep-aside__item">
                            <span class="ep-aside__title">
                                Languages
                            </span>
                            <div class="ep-aside__group">
                                @foreach ($expert->languages as $language)
                                <p class="ep-aside__text">
                                    {{$language->name}}
                                </p>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @if (count($expert->agendas) > 0)
                        <div class="ep-aside__item">
                            <span class="ep-aside__title">
                                @lang('common.agendas')
                            </span>
                            <p class="ep-aside__text">
                                @foreach ($expert->agendas as $agenda)
                                    <a href="{{route('agendas.show', $agenda->id)}}" class="more-link more-link--text link-reset" target="_blank">
                                        {{$agenda->name}}
                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                                            <g opacity="0.5">
                                                <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </a>
                                <br>
                                @endforeach
                            </p>
                        </div>
                    @endif
                    @if (count($expert->universities) > 0)
                        <div class="ep-aside__item">
                            <span class="ep-aside__title">
                                @lang('sidebar.insitution')
                            </span>
                            <div class="ep-aside__group">
                                @foreach ($expert->universities as $university)
                                    <p class="ep-aside__text">
                                        <a href="https://www.southampton.ac.uk/" class="more-link more-link--text link-reset"
                                            target="_blank">
                                            {{$university->name}}
                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                                                <g opacity="0.5">
                                                    <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </p>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @if (count($expert->degrees) > 0)
                        <div class="ep-aside__item ep-aside__item--hover" tabindex="0">
                            <span class="ep-aside__title">
                                @lang('sidebar.education')
                            </span>
                            <div class="ep-aside__group">
                                <p class="ep-aside__text">
                                    {{-- {{$expert->degrees->count()}} &nbsp; --}}@lang('sidebar.degrees')
                                    <svg class="ep-aside__plus" width="8" height="8" viewBox="0 0 8 8" fill="none">
                                        <path
                                            d="M4 3.18205L7.11125 -3.88485e-08L8 0.908974L4 5L-3.97325e-08 0.908973L0.888749 -3.10843e-07L4 3.18205Z"
                                            fill="#141414" />
                                    </svg>
                                </p>
                                <ul class="ep-aside__list">
                                    @foreach ($expert->degrees as $item)
                                        <li>{{$item->name}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                    @if ($expert->jobTitle)
                        <div class="ep-aside__item">
                            <span class="ep-aside__title">
                                @lang('common.position')
                            </span>
                            <p class="ep-aside__text">
                                {{$expert->jobTitle}}
                            </p>
                        </div>
                    @endif
                    @if ($expert->cv)
                        <a class="btn btn--black ep__btn btn-reset" href="{{$expert->cv}}">
                            <span>
                                @lang('sidebar.view_cv')
                            </span>
                            <svg width="13" height="10" viewBox="0 0 13 10" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.89101 0.745718L12.7416 4.40679C13.0861 4.73441 13.0861 5.26559 12.7416 5.59321L8.89101 9.25428C8.54643 9.58191 7.98776 9.58191 7.64318 9.25428C7.2986 8.92666 7.2986 8.39548 7.64318 8.06785L9.98746 5.83893H0.882353C0.395043 5.83893 0 5.46333 0 5C0 4.53667 0.395043 4.16107 0.882353 4.16107H9.98746L7.64318 1.93215C7.2986 1.60452 7.2986 1.07334 7.64318 0.745718C7.98776 0.418094 8.54643 0.418094 8.89101 0.745718Z"
                                    fill="white"></path>
                            </svg>
                        </a>
                    @endif
                </aside>
            </div>
        </div>
        @if (count($expert->publications) > 0)
            <h3 class="ep__publications-title">
                @lang('common.publications')<sup>{{$expert->publications->count()}}</sup>
            </h3>
            <div class="row ep__p-row">
                @foreach ($expert->publications as $publication)
                    <div class="col-md-3 ep__p-col">
                        <a href="{{route('publications.show', $publication->id)}}" class="ep-item link-reset">
                            <span class="ep-item__date">
                                @if (\App::getLocale() == 'ru')
                                    {{ Date::parse($publication->created_at)->locale(\App::getLocale())->format('d M Y') }}
                                @else
                                    {{ Date::parse($publication->created_at)->locale(\App::getLocale())->format('M d, Y') }}
                                @endif
                                <br>
                                {{$publication->type->name}}
                            </span>
                            <p class="ep-item__text serif-big max-lines-limitation">
                                {{$publication->title}}
                            </p>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="pagination">
                <div class="pagination__row">
                    <ul class="pagination__list list-reset">
                        <li>
                            <a href="#" class="disabled">1</a>
                        </li>
                        <li>
                            <a href="#" class="disabled">…</a>
                        </li>
                        <li>
                            <a href="#">10</a>
                        </li>
                    </ul>
                    <div class="pagination__btns">
                        <button class="btn-reset" type="button" disabled>
                            <svg width="19" height="16" viewBox="0 0 19 16" fill="none">
                                <path
                                    d="M18 9C18.5523 9 19 8.55228 19 8C19 7.44772 18.5523 7 18 7V9ZM0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM18 7L1 7V9L18 9V7Z"
                                    fill="var(--black)" />
                            </svg>
                        </button>
                        <button class="btn-reset" type="button">
                            <svg width="19" height="16" viewBox="0 0 19 16" fill="none">
                                <path
                                    d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM18.7071 8.70711C19.0976 8.31658 19.0976 7.68342 18.7071 7.29289L12.3431 0.928932C11.9526 0.538408 11.3195 0.538408 10.9289 0.928932C10.5384 1.31946 10.5384 1.95262 10.9289 2.34315L16.5858 8L10.9289 13.6569C10.5384 14.0474 10.5384 14.6805 10.9289 15.0711C11.3195 15.4616 11.9526 15.4616 12.3431 15.0711L18.7071 8.70711ZM1 9H18V7H1V9Z"
                                    fill="var(--black)" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="pagination__progress" style="--progress: 10%">
                    <div class="pagination__progress-bar"></div>
                </div>
            </div>
        @endif
        @if (count($expert->events) > 0)
            <h3 class="ep__publications-title">
                @lang('common.event')<sup>{{$expert->events->count()}}</sup>
            </h3>
            <div class="row ep__p-row ep__p-row--events">
                @foreach ($expert->events as $event)
                    <div class="col-md-3 ep__p-col">
                        <a href="{{route('events.show', $event->id)}}" class="ep-item link-reset">
                            <span class="ep-item__date">
                                @if (\App::getLocale() == 'ru')
                                    {{ Date::parse(explode('-', $event->datetimes)[0])->locale(\App::getLocale())->format('d M Y') }}
                                @else
                                    {{ Date::parse(explode('-', $event->datetimes)[0])->locale(\App::getLocale())->format('M d, Y') }}
                                @endif
                                <br>
                                {{$event->city ?? ""}}
                            </span>
                            <p class="ep-item__text serif-big max-lines-limitation">
                                {{$event->title}}
                            </p>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="pagination">
                <div class="pagination__row">
                    <ul class="pagination__list list-reset">
                        <li>
                            <a href="#" class="disabled">1</a>
                        </li>
                        <li>
                            <a href="#" class="disabled">…</a>
                        </li>
                        <li>
                            <a href="#">10</a>
                        </li>
                    </ul>
                    <div class="pagination__btns">
                        <button class="btn-reset" type="button" disabled>
                            <svg width="19" height="16" viewBox="0 0 19 16" fill="none">
                                <path
                                    d="M18 9C18.5523 9 19 8.55228 19 8C19 7.44772 18.5523 7 18 7V9ZM0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM18 7L1 7V9L18 9V7Z"
                                    fill="var(--black)" />
                            </svg>
                        </button>
                        <button class="btn-reset" type="button">
                            <svg width="19" height="16" viewBox="0 0 19 16" fill="none">
                                <path
                                    d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM18.7071 8.70711C19.0976 8.31658 19.0976 7.68342 18.7071 7.29289L12.3431 0.928932C11.9526 0.538408 11.3195 0.538408 10.9289 0.928932C10.5384 1.31946 10.5384 1.95262 10.9289 2.34315L16.5858 8L10.9289 13.6569C10.5384 14.0474 10.5384 14.6805 10.9289 15.0711C11.3195 15.4616 11.9526 15.4616 12.3431 15.0711L18.7071 8.70711ZM1 9H18V7H1V9Z"
                                    fill="var(--black)" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="pagination__progress" style="--progress: 10%">
                    <div class="pagination__progress-bar"></div>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection
