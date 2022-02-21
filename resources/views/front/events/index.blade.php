@extends('layouts.app')

@section('meta_title')
@lang('page.events')
@endsection

@section('body')
<section class="news  pb200" lang="{{\App::getLocale()}}">
    <div class="container">
        <div class="news__top">
            <span class="italic">
                @lang('headers.international')
            </span>
            <h1 class="news__title events__title">
                @lang('headers.events')
            </h1>
            @if (count($mainEvents) > 0)
                <div class="row">
                    @foreach ($mainEvents->where('is_main', 1)->take(3) as $event)
                        <div class="col-sm-4 events__col news__col">
                            <a class="news-item events-item--top link-reset" href="{{route('events.show', $event->id)}}">
                                @if ($event->image)
                                    <div class="events-hover">
                                        <picture>
                                            <source srcset="{{$event->image}}" media="(max-width: 767px)">
                                            <img class="news-item__img" src="{{$event->image}}" srcset="{{$event->image}}"
                                                alt="news image">
                                        </picture>
                                        <img class="news-item__img-hover" src="{{$event->image}}" srcset="{{$event->image}}"
                                            alt="news image">
                                    </div>
                                @endif
                                <strong class="news-item__title">
                                    {{$event->title}}
                                </strong>
                                <p class="news__item-text">
                                    {!!substr(strip_tags($event->description), 0, 200)!!}
                                </p>
                                <span class="news-item__date gray">
                                    @if (\App::getLocale() == 'ru')
                                        {{ Date::parse(explode('-', $event->datetimes)[0])->locale(\App::getLocale())->format('d M Y') }}
                                    @else
                                        {{ Date::parse(explode('-', $event->datetimes)[0])->locale(\App::getLocale())->format('M d, Y') }}
                                    @endif
                                    <br>
                                    {{$event->city ?? ""}}
                                </span>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        @if (count($upcommingEvents) > 0)
            <div class="upcoming">
                <h3 class="upcoming__title">
                    @lang('page.upcomming_events')
                </h3>
                <div class="row upcoming__row" id="pagination_data">
                    @include('includes.pagination_data')
                </div>
                <div class="pagination" id="pagination">
                    <div class="pagination__row">
                        <ul class="pagination__list list-reset">
                            <li>
                                <a href="#" id="first_page_ue" class="disabled">1</a>
                            </li>
                            <li>
                                <a href="#" class="disabled">…</a>
                            </li>
                            <li>
                                <a href="#" id="last_page_ue">{{$upcommingEvents->lastPage()}}</a>
                            </li>
                        </ul>
                        <div class="pagination__btns">
                            <button class="btn-reset" type="button" page="{{$upcommingEvents->firstItem()}}" id="prev_page" disabled>
                                <svg width="19" height="16" viewBox="0 0 19 16" fill="none">
                                    <path
                                        d="M18 9C18.5523 9 19 8.55228 19 8C19 7.44772 18.5523 7 18 7V9ZM0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM18 7L1 7V9L18 9V7Z"
                                        fill="var(--black)" />
                                </svg>
                            </button>
                            <button class="btn-reset" type="button" page="{{$upcommingEvents->currentPage() + 1}}" last-page="{{$upcommingEvents->lastPage()}}" id="next_page">
                                <svg width="19" height="16" viewBox="0 0 19 16" fill="none">
                                    <path
                                        d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM18.7071 8.70711C19.0976 8.31658 19.0976 7.68342 18.7071 7.29289L12.3431 0.928932C11.9526 0.538408 11.3195 0.538408 10.9289 0.928932C10.5384 1.31946 10.5384 1.95262 10.9289 2.34315L16.5858 8L10.9289 13.6569C10.5384 14.0474 10.5384 14.6805 10.9289 15.0711C11.3195 15.4616 11.9526 15.4616 12.3431 15.0711L18.7071 8.70711ZM1 9H18V7H1V9Z"
                                        fill="var(--black)" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="pagination__progress" style="--progress: 10%" >
                        <div class="pagination__progress-bar"></div>
                    </div>
                </div>
            </div>
        @endif
        @if (count($pastEvents) > 0)
            <div class="other-news">
                <h3 class="upcoming__title">
                    @lang('events.events.past')
                </h3>
                <div class="row other-news__row" id="past_events">
                    @include('pagination.past_events')
                </div>
                <div class="pagination" id="pagination-events">
                    <div class="pagination__row">
                        <ul class="pagination__list list-reset">
                            <li>
                                <a href="#" class="disabled" id="first_page_ue">1</a>
                            </li>
                            <li>
                                <a href="#" class="disabled">…</a>
                            </li>
                            <li>
                                <a href="#" id="last_page_pe">{{$pastEvents->lastPage()}}</a>
                            </li>
                        </ul>
                        <div class="pagination__btns">
                            <button class="btn-reset" type="button" disabled id="prev_page_past_events">
                                <svg width="19" height="16" viewBox="0 0 19 16" fill="none">
                                    <path
                                        d="M18 9C18.5523 9 19 8.55228 19 8C19 7.44772 18.5523 7 18 7V9ZM0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM18 7L1 7V9L18 9V7Z"
                                        fill="var(--black)" />
                                </svg>
                            </button>
                            <button class="btn-reset" type="button" id="next_page_past_events" page="{{$pastEvents->currentPage() + 1}}" last-page="{{$pastEvents->lastPage()}}">
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
            </div>
        @endif
        @if (count($blocks) > 0)
            <div class="mt-5">
                @foreach ($blocks as $block)
                    <div class="other-news mt-5">
                        <h3 class="upcoming__title">
                            @if ($block->expert_id != null)
                            {{ \App\Models\Expert::where('id', $block->expert_id)->first()->name }}
                            @endif
                            @if ($block->tag_id != null)
                            {{ \App\Models\Tag::where('id', $block->tag_id)->first()->name }}
                            @endif
                            @if ($block->agenda_id != null)
                            {{ \App\Models\Agenda::where('id', $block->agenda_id)->first()->name }}
                            @endif
                        </h3>
                        <div class="row other-news__row 2">
                            @if ($block->agenda_id != null)
                            @foreach (\App\Models\Event::where('agenda_id', $block->agenda_id)->limit(4)->get() as $agendaEvent)
                            <div class="col-md-3 col-sm-4 other-news__col">
                                <a class="upcoming-item link-reset" href="{{route('events.show', $agendaEvent->id)}}">
                                    <span class="upcoming-item__date gray">
                                        @if (\App::getLocale() == 'ru')
                                            {{ Date::parse(explode('-', $agendaEvent->datetimes)[0])->locale(\App::getLocale())->format('d M Y') }}
                                        @else
                                            {{ Date::parse(explode('-', $agendaEvent->datetimes)[0])->locale(\App::getLocale())->format('M d, Y') }}
                                        @endif
                                        <br>
                                        {{$agendaEvent->location ?? ""}}
                                    </span>
                                    <p class="upcoming-item__text serif">
                                        {{$agendaEvent->title}}<br>
                                        {!!substr($agendaEvent->description, 0, 100)!!}
                                    </p>
                                </a>
                            </div>
                            @endforeach
                            @endif

                            @if ($block->expert_id != null)
                            @foreach (\App\Models\Expert::where('id', $block->expert_id)->first()->events->take(4) as
                            $expertEvent)
                            <div class="col-md-3 col-sm-4 other-news__col">
                                <a class="upcoming-item link-reset" href="{{route('events.show', $expertEvent->id)}}">
                                    <span class="upcoming-item__date gray">
                                        @if (\App::getLocale() == 'ru')
                                            {{ Date::parse(explode('-', $expertEvent->datetimes)[0])->locale(\App::getLocale())->format('d M Y') }}
                                        @else
                                            {{ Date::parse(explode('-', $expertEvent->datetimes)[0])->locale(\App::getLocale())->format('M d, Y') }}
                                        @endif
                                        <br>
                                        {{$expertEvent->city ?? ""}}
                                    </span>
                                    <p class="upcoming-item__text serif">
                                        {{$expertEvent->title}}<br>
                                        {!!substr($expertEvent->description, 0, 100)!!}
                                    </p>
                                </a>
                            </div>
                            @endforeach
                            @endif

                            @if ($block->tag_id != null)
                            @foreach (\App\Models\Tag::where('id', $block->tag_id)->first()->events->take(4) as $tagEvent)
                            <div class="col-md-3 col-sm-4 other-news__col">
                                <a class="upcoming-item link-reset" href="{{route('events.show', $tagEvent->id)}}">
                                    <span class="upcoming-item__date gray">
                                        @if (\App::getLocale() == 'ru')
                                            {{ Date::parse(explode('-', $tagEvent->datetimes)[0])->locale(\App::getLocale())->format('d M Y') }}
                                        @else
                                            {{ Date::parse(explode('-', $tagEvent->datetimes)[0])->locale(\App::getLocale())->format('M d, Y') }}
                                        @endif
                                        <br>
                                        {{$tagEvent->city ?? ""}}
                                    </span>
                                    <p class="upcoming-item__text serif">
                                        {{$tagEvent->title}}<br>
                                        {!!substr($tagEvent->description, 0, 100)!!}
                                    </p>
                                </a>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    <script>
        var lang = $('.pb200').attr('lang');
        loadDataInit('#pagination', loadData);
        function loadData(page){
            $.ajax({
                type: "GET",
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}",
                },
                url: "/ajax/"+lang+"/upcoming_events?page="+page,
                success: function(data){
                    $('#pagination_data').html(data);
                }
            });
        }

        loadDataInit('#pagination-events', loadDataPastEvents);
        function loadDataPastEvents(page){
            $.ajax({
                type: "GET",
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}",
                },
                url: "/ajax/"+lang+"/past_events?page="+page,
                success: function(data){
                    $('#past_events').html(data);
                }
            });
        }
    </script>
</section>
@endsection
