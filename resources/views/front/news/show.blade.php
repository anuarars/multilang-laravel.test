@extends('layouts.app')

@section('meta_title')
{{$newsitem->title}}
@endsection

@section('body')
<section class="research pb200">
    <div class="container">
        <div class="row">
            <div class="col-md-9 research__column">
                <ul class="breadcrumbs list-reset">
                    <li>
                        <a href="{{route('news.index')}}">@lang('page.news')</a>
                    </li>
                    <li>
                        {{Str::words($newsitem->title, 5)}}
                    </li>
                </ul>
                <h1 class="h2 research__title titleObserver research__group-text">
                    {{$newsitem->title}}
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 research__column">
                <div class="research__group-text">
                    {!!$newsitem->content!!}

                    <div class="social research__social" role="list">
                        <a href="{{$network[0]->facebook}}" aria-label="facebook" target="_blank">
                            <img src="{{asset('templates/v2/svg/facebook.svg')}}" alt="rwa">
                        </a>
                        <a href="{{$network[0]->youtube}}" aria-label="youtube" target="_blank">
                            <img src="{{asset('templates/v2/svg/youtube.svg')}}" alt="rwa">
                        </a>
                        <a href="{{$network[0]->instagram}}" aria-label="instagram" target="_blank">
                            <img src="{{asset('templates/v2/svg/instagram.svg')}}" alt="rwa">
                        </a>
                        <a href="{{$network[0]->linkedin}}" aria-label="linkedin" target="_blank">
                            <img src="{{asset('templates/v2/svg/linkedin.svg')}}" alt="rwa">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 research__column">
                <aside class="research__aside">
                    <div class="research__col">
                        <h4 class="research__name">
                            @lang('common.datetime')
                        </h4>
                        <p class="research__col-text">
                            @if (\App::getLocale() == 'ru')
                                {{ Date::parse($newsitem->created_at)->locale(\App::getLocale())->format('d F Y') }}
                            @else
                                {{ Date::parse($newsitem->created_at)->locale(\App::getLocale())->format('M d, Y') }}
                            @endif
                        </p>
                    </div>
                    {{-- <div class="research__col">
                        <h4 class="research__name">
                            Related to
                        </h4>
                        <p class="research__col-text">
                            Events
                        </p>
                    </div> --}}
                    @if ($newsitem->agenda)
                        <div class="research__col">
                            <h4 class="research__name">
                                @lang('common.agenda')
                            </h4>
                            <p class="research__col-text">
                                <a href="#" class="more-link link-reset" onclick="document.getElementById('agenda-{{$newsitem->agenda->id}}').submit();">
                                    {{$newsitem->agenda->name}}
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
                            <form class="filtersForm" action="{{route('search.index')}}" method="GET" style="display: none" id="agenda-{{$newsitem->agenda->id}}">
                                <input type="hidden" name="agendas[]" value="{{$newsitem->agenda->id}}">
                            </form>
                        </div>
                    @endif
                    @if (count($newsitem->tags) > 0)
                        <div class="research__col">
                            <h4 class="research__name">
                                @lang('sidebar.keywords')
                            </h4>
                            @foreach ($newsitem->tags as $tag)
                                <p class="research__col-text">
                                    <a href="#" class="more-link link-reset" onclick="document.getElementById('tag-{{$tag->id}}').submit();">
                                        {{$tag->name}}
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
                                <form class="filtersForm" action="{{route('search.index')}}" method="GET" style="display: none" id="tag-{{$tag->id}}">
                                    <input type="hidden" name="tags[]" value="{{$tag->id}}">
                                </form>
                            @endforeach
                        </div>
                    @endif
                </aside>
            </div>
        </div>
        <div class="other-research">
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
    loadDataInit('#pagination-other-news', loadDataOtherNews);
    function loadDataOtherNews(page){
        $.ajax({
            type: "GET",
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}",
            },
            url: "/ajax/other_news?page="+page,
            success: function(data){
                $('#other_news').html(data);
            }
        });
    }
</script>
@endsection
