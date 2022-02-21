@extends('layouts.app')

@section('meta_title')
    {{$agenda->name}}
@endsection

@section('body')
<section class="agenda pb200">
    <div class="container">
        <ul class="breadcrumbs list-reset">
            <li>
              <a href="{{route('agendas.index')}}">@lang('common.agenda')</a>
            </li>
            <li>
                {{$agenda->name}}
            </li>
        </ul>
        <div class="agenda__main-image">
            <img src="{{$agenda->image_main}}" alt="{{$agenda->image_main}}">
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="agenda-item__title">
                    {{$agenda->name}}
                </div>
            </div>
            <div class="col-12 col-md-8 agenda-contents">
                {!!$agenda->description!!}
            </div>
        </div>
        @if (count($agenda->publications) > 0)
            <div class="agenda__title">
                <h3 class="agenda__title--text">@lang('common.publications')</h3>
                <img class="agenda__title--img" src="{{asset('templates/v2/img/arrow-title.svg')}}" alt="{{asset('templates/v2/img/arrow-title.svg')}}">
            </div>
            <div class="row">
                @foreach ($agenda->publications->take(3) as $publication)
                    <div class="col-md-4">
                        <div class="agenda-publication__name">{{$publication->type->name}}</div>
                        <div class="agenda-publication__date">
                            @if (\App::getLocale() == 'ru')
                                {{ Date::parse($publication->created_at)->locale(\App::getLocale())->format('d F Y') }} 
                            @else
                                {{ Date::parse($publication->created_at)->locale(\App::getLocale())->format('M d, Y') }}
                            @endif 
                        </div>
                        <div class="agenda-publication__text">
                            {{$publication->title}}
                        </div>
                        <div class="agenda-publication__list">
                            @foreach ($publication->experts as $expert)
                                <div class="agenda-publication__item">
                                    <img src="{{$expert->image ?? "https://iclrc-v2.uprising.agency/templates/v2/img/ex1.jpg"}}" 
                                        class="agenda-publication__item--img">
                                    <div class="agenda-publication__item--content">
                                        <div class="agenda-publication__item--name">{{$expert->name}}</div>
                                        <div class="agenda-publication__item--description">{{$expert->country}}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        @if (count($agenda->events) > 0)
            <div class="agenda__title">
                <h3 class="agenda__title--text">@lang('common.event')</h3>
                <img class="agenda__title--img" src="{{asset('templates/v2/img/arrow-title.svg')}}" alt="{{asset('templates/v2/img/arrow-title.svg')}}">
            </div>
            <div class="row">
                @foreach ($agenda->events->take(3) as $event)
                    <div class="col-md-4">
                        <a href="{{route('events.show', $event->id)}}" class="agenda-item link-reset">
                            <div class="agenda-publication__date">
                            @if (\App::getLocale() == 'ru')
                                {{ Date::parse(explode('-', $event->datetimes)[0])->locale(\App::getLocale())->format('d F Y') }} 
                            @else
                                {{ Date::parse(explode('-', $event->datetimes)[0])->locale(\App::getLocale())->format('M d, Y') }}
                            @endif 
                            </div>
                            <div class="agenda-publication__name">{{$event->type->title}}</div>
                            <div class="agenda-publication__text">
                                {{$event->title}}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
        @if (count($agenda->news) > 0)
            <div class="agenda__title">
                <h3 class="agenda__title--text">@lang('news.news.heading')</h3>
                <img class="agenda__title--img" src="{{asset('templates/v2/img/arrow-title.svg')}}" alt="{{asset('templates/v2/img/arrow-title.svg')}}">
            </div>
            <div class="row">
                @foreach ($agenda->news->take(3) as $item)
                    <div class="col-md-4">
                        <a href="{{route('news.show', $item->id)}}" class="agenda-item link-reset">
                            <div class="agenda-publication__date">
                                @if (\App::getLocale() == 'ru')
                                    {{ Date::parse($item->created_at)->locale(\App::getLocale())->format('d M Y') }} 
                                @else
                                    {{ Date::parse($item->created_at)->locale(\App::getLocale())->format('M d, Y') }}
                                @endif 
                            </div>
                            <div class="agenda-publication__name">{{$agenda->name}}</div>
                            <div class="agenda-publication__text">
                                {{$item->title}}
                            </div>
                        </a>

                    </div>
                @endforeach
            </div>
        @endif
        @if (count($agenda->experts->where('is_show', 1)) > 0)
            <div class="agenda__title">
                <h3 class="agenda__title--text">@lang('common.expertss')</h3>
            </div>
            <div class="agenda__experts-list">
                @foreach ($agenda->experts->where('is_show', 1) as $expert)
                    <div class="agenda__experts-item">
                        @if ($expert->image)
                            <img class="agenda__experts-img" src="{{$expert->image}}" alt="{{$expert->image}}"/>
                        @endif
                        <div class="agenda__experts-name">{{$expert->name}}</div>
                        {{-- <div class="agenda__experts-from">{{$expert->country}}</div> --}}
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
@endsection
