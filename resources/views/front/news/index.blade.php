@extends('layouts.app')

@section('meta_title')
@lang('news.news.heading')
@endsection

@section('body')
<section class="news pb200" lang="{{\App::getLocale()}}">
    <div class="container">
        <div class="news__top">
            <span class="italic">
                {{$newsCount}} @lang('headers.actual')
            </span>
            <h1 class="news__title">
                @lang('headers.news')
            </h1>
            <div class="row">
                @foreach ($mainNews as $item)
                    <div class="col-md-6 col-lg-4 news__col">
                        <a class="news-item link-reset" href="{{ route('news.show', $item->id) }}">
                            <picture>
                                <img class="news-item__img" src="{{$item->image}}" srcset="{{$item->image}}"
                                    alt="{{$item->image}}">
                            </picture>
                            <strong class="news-item__title">
                                {{$item->title}}
                            </strong>
                            <p class="news__item-text">
                                {{ Str::words(strip_tags($item->content), 30);}}
                            </p>
                            <span class="news-item__date gray">
                                @if (\App::getLocale() == 'ru')
                                    {{ Date::parse($item->created_at)->locale(\App::getLocale())->format('d M Y') }}
                                @else
                                    {{ Date::parse($item->created_at)->locale(\App::getLocale())->format('M d, Y') }}
                                @endif
                                <br>
                                @if ($item->agenda)
                                    {{$item->agenda->name}}
                                @endif
                            </span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        @if (count($upcommingEvents) > 0)
            <div class="upcoming">
                <h3 class="upcoming__title">
                    @lang('events.events.upcoming')
                </h3>
                <div class="row upcoming__row" id="pagination_data_events_upcoming">
                    @include('includes.pagination_data')
                </div>
                <div class="pagination" id="pagination-events-upcoming">
                    <div class="pagination__row">
                        <ul class="pagination__list list-reset">
                            <li>
                                <a href="#" class="disabled" id="last_page_pe">1</a>
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
                    <div class="pagination__progress" style="--progress: 10%">
                        <div class="pagination__progress-bar"></div>
                    </div>
                </div>
            </div>
        @endif
        <div class="other-news">
            <h3 class="upcoming__title">
                @lang('news.news.other')
            </h3>
            <div class="row other-news__row" id="other_news">
                @include('pagination.other_news')
            </div>
            <div class="pagination" id="pagination-other-news">
                <div class="pagination__row">
                    <ul class="pagination__list list-reset">
                        <li>
                            <a href="#" class="disabled" id="first_page_on">1</a>
                        </li>
                        <li>
                            <a href="#" class="disabled">…</a>
                        </li>
                        <li>
                            <a href="#" id="last_page_on">{{$news->lastPage()}}</a>
                        </li>
                    </ul>
                    <div class="pagination__btns">
                        <button class="btn-reset" type="button" disabled id="prev_page_other_news" page="{{$news->firstItem()}}">
                            <svg width="19" height="16" viewBox="0 0 19 16" fill="none">
                                <path
                                    d="M18 9C18.5523 9 19 8.55228 19 8C19 7.44772 18.5523 7 18 7V9ZM0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM18 7L1 7V9L18 9V7Z"
                                    fill="var(--black)" />
                            </svg>
                        </button>
                        <button class="btn-reset" type="button" id="next_page_other_news" page="{{$news->currentPage() + 1}}" last-page="{{$news->lastPage()}}">
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
    </div>
</section>

<script>
    var lang = $('.pb200').attr('lang');
    loadDataInit('#pagination-events-upcoming', loadDataEventsUpcoming);
    function loadDataEventsUpcoming(page){
        $.ajax({
            type: "GET",
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}",
            },
            url: "/ajax/"+lang+"/upcoming_events?page="+page,
            success: function(data){
                $('#pagination_data_events_upcoming').html(data);
            }
        });
    }

    loadDataInit('#pagination-other-news', loadDataOtherNews);
    function loadDataOtherNews(page){
        $.ajax({
            type: "GET",
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}",
            },
            url: "/ajax/"+lang+"/other_news?page="+page,
            success: function(data){
                $('#other_news').html(data);
            }
        });
    }
</script>
@endsection
