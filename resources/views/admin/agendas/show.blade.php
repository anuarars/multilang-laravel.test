@extends('layouts.view')

@section('body')
<section class="agenda pb200">
    <div class="container">
        <div class="agenda__main-image">
            <img src="{{$agenda->image}}" alt="{{$agenda->image}}">
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="agenda-item__title">
                    {{$agenda->name}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="agenda-item__text">
                    {{$agenda->description}}
                </div>
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
                        <div class="agenda-publication__name">{{$publication->title}}</div>
                        <div class="agenda-publication__date">{{ Date::parse($publication->created_at)->format('d F Y') }}</div>
                        <div class="agenda-publication__text">
                            {!!substr($publication->content, 0, 200)!!}
                        </div>
                        <div class="agenda-publication__list">
                            @foreach ($publication->experts as $expert)
                                <div class="agenda-publication__item">
                                    <img src="{{$expert->image}}" 
                                        class="agenda-publication__item--img">
                                    <div class="agenda-publication__item--content">
                                        <div class="agenda-publication__item--name">{{$expert->name}}</div>
                                        <div class="agenda-publication__item--description">{{$expert->jobTitle}}</div>
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
                        <a href="#" class="agenda-item link-reset">
                            <div class="agenda-publication__date">{{ Date::parse(explode('-', $event->datetimes)[0])->locale(\App::getLocale())->format('d F Y') }}</div>
                            <div class="agenda-publication__name">{{$event->title}}</div>
                            <div class="agenda-publication__text">
                                {!!substr($event->description, 0, 200)!!}
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
                        <a href="#" class="agenda-item link-reset">
                            <div class="agenda-publication__date">{{ Date::parse($item->created_at)->locale(\App::getLocale())->format('d F Y') }}</div>
                            <div class="agenda-publication__name">{{$agenda->title}}</div>
                            <div class="agenda-publication__text">
                                {!!substr($item->content, 0, 200)!!}
                            </div>
                        </a>

                    </div>
                @endforeach
            </div>
        @endif
        @if (count($agenda->experts) > 0)
            <div class="agenda__title">
                <h3 class="agenda__title--text">@lang('common.expertss')</h3>
            </div>
            <div class="agenda__experts-list">
                @foreach ($agenda->experts as $expert)
                    <div class="agenda__experts-item">
                        <img class="agenda__experts-img" src="{{$expert->image}}" />
                        <div class="agenda__experts-name">{{$expert->name}}</div>
                        <div class="agenda__experts-from">{{$expert->country}}</div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
@endsection