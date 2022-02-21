@extends('layouts.view')

@section('body')
<section class="research events-page">
    <div class="container">
        <h1 class="h2 events-page__title">
            {{$event->title}}
        </h1>
        <div class="row justify-content-between events-row">
            <div class="col-md-7 research__column">
                <div class="events__group-text">
                    {!!$event->description!!}
                </div>
                <div class="speakers">
                    @foreach ($event->experts as $expert)
                        <div class="speaker">
                            <img class="speaker__img" src="./img/s4.png" srcset="./img/s4.png 1x, ./img/s4@2x.png 2x"
                                alt="speaker">
                            <div class="speaker__info">
                                <h4>
                                    {{$expert->name}}
                                </h4>
                                <span class="gray">
                                    {{$expert->jobTitle}} <br>
                                    {{$expert->description}}
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 research__column">
                <aside class="research__aside">
                    <div class="research__col">
                        <h4 class="research__name">
                            @lang('common.datetime')
                        </h4>
                        <p class="research__col-text">
                            {{ Date::parse(explode('-', $event->datetimes)[0])->locale(\App::getLocale())->format('d F Y') }}
                        </p>
                    </div>
                    <div class="research__col">
                        <h4 class="research__name">
                            @lang('events.type')
                        </h4>
                        <p class="research__col-text">
                            {{$event::REG_TYPES[$event->reg_types]}}
                        </p>
                    </div>
                    @if (!is_null($event->agenda))
                        <div class="research__col">
                            <h4 class="research__name">
                                @lang('common.agenda')
                            </h4>
                            <p class="research__col-text">
                                {{$event->agenda->name}}
                            </p>
                        </div>
                    @endif
                    @if (count($event->tags) > 0)
                        <div class="research__col">
                            <h4 class="research__name">
                                @lang('news.news.keywords')
                            </h4>
                            <ul class="research__list">
                                @foreach ($event->tags as $tag)
                                    <li>
                                        <a href="#">{{$tag->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="research__col">
                        <h4 class="research__name">
                            @lang('events.duration')
                        </h4>
                        <p class="research__col-text">
                            Дней: {{Carbon\Carbon::parse(explode('-', $event->datetimes)[0])->diffInDays(Carbon\Carbon::parse(explode('-', $event->datetimes)[1]))}}
                        </p>
                    </div>
                    <div class="research__col">
                        <h4 class="research__name">
                            @lang('events.format')
                        </h4>
                        <p class="research__col-text">
                            {{$event::FORMAT_TYPES[$event->format_types]}}
                        </p>
                    </div>
                    <div class="research__col">
                        <h4 class="research__name">
                            Location
                        </h4>
                        <p class="research__col-text lh150">
                            {{$event->city}}<br>
                            {{$event->location}}
                        </p>
                    </div>
                </aside>
            </div>
        </div>
        <div class="other-research other-events">
            <h3 class="event-page__title">
                @lang('events.other')
            </h3>
            <div class="row other-news__row">
                @foreach ($events as $item)
                    <div class="col-md-3 other-news__col">
                        <a class="upcoming-item link-reset" href="#">
                            <span class="upcoming-item__date gray">
                                {{ Date::parse(explode('-', $item->datetimes)[0])->locale(\App::getLocale())->format('d F Y') }}<br>
                                {{$item->city}}
                            </span>
                            <p class="upcoming-item__text serif-big">
                                {{$item->title}}
                            </p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
