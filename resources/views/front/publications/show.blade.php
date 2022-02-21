@extends('layouts.app')

@section('meta')
    <meta property="og:title" content="{{$publication->title}}" />
    <meta property="og:image" content="{{$publication->image}}" />
@endsection

@section('meta_title')
{{$publication->title}}
@endsection

@section('body')
<section class="research pb200" lang="{{\App::getLocale()}}">
    <div class="container">
        <ul class="breadcrumbs list-reset">
            <li>
                <a href="{{route('publications.index')}}">@lang('common.publications')</a>
            </li>
            <li>
                {{$publication->title}}
            </li>
        </ul>
        <h1 class="h2 research__title titleObserver">
            {{$publication->title}}
        </h1>
        <div class="row">
            <div class="col-md-8 research__column">
                <div class="research__group-text">
                    {!!$publication->content!!}
                </div>
                <div class="research__group-text">
                    <div class="social research__social" role="list">
                        <a href="https://facebook.com/sharer/sharer.php?u={{route('publications.show', $publication->id)}}" aria-label="facebook" target="_blank">
                            <img src="{{asset('templates/v2/svg/facebook.svg')}}" alt="rwa">
                        </a>
                        <a href="https://vk.com/share.php?url={{route('publications.show', $publication->id)}}?title={{$publication->title}}?image={{$publication->image}}" aria-label="vk" target="_blank">
                            <img src="{{asset('templates/v2/svg/youtube.svg')}}" alt="rwa">
                        </a>
                        <a href="{{$network[0]->instagram}}" aria-label="instagram" target="_blank">
                            <img src="{{asset('templates/v2/svg/instagram.svg')}}" alt="rwa">
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{route('publications.show', $publication->id)}}" aria-label="linkedin" target="_blank">
                            <img src="{{asset('templates/v2/svg/linkedin.svg')}}" alt="rwa">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 research__column">
                <aside class="research__aside">
                    @if ($publication->expert)
                        <div class="research__col research__col--user" tabindex="0">
                            <h4 class="research__name">
                                @lang('sidebar.pm')
                            </h4>
                            <div class="research__info">
                                <figure class="research__avatar">
                                    <img src="{{$publication->expert->image}}" srcset="{{$publication->expert->image}}" width="54" height="56">
                                </figure>
                                <div class="research__left">
                                    <strong class="h4">Olga Melnichenko</strong>
                                    <span class="gray">Counselor in Private law</span>
                                </div>
                            </div>
                            <p class="research__col-text">
                                {{$publication->expert->name}}
                            </p>
                        </div>
                    @endif
                    <div class="research__col">
                        <h4 class="research__name">
                            @lang('sidebar.date')
                        </h4>
                        <p class="research__col-text">
                            @if (\App::getLocale() == 'ru')
                                {{ Date::parse($publication->created_at)->locale(\App::getLocale())->format('d F Y') }}
                            @else
                                {{ Date::parse($publication->created_at)->locale(\App::getLocale())->format('M d, Y') }}
                            @endif
                        </p>
                    </div>
                    @if ($publication->agenda)
                        <div class="research__col">
                            <h4 class="research__name">
                                @lang('sidebar.agenda')
                            </h4>
                            <p class="research__col-text">
                                <a href="#" class="more-link link-reset" onclick="document.getElementById('agenda-{{$publication->agenda->id}}').submit();">
                                    {{$publication->agenda->name}}
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
                            <form class="filtersForm" action="{{route('search.index')}}" method="GET" style="display: none" id="agenda-{{$publication->agenda->id}}">
                                <input type="hidden" name="agendas[]" value="{{$publication->agenda->id}}">
                            </form>
                        </div>
                    @endif
                    <div class="research__col">
                        @if (count($publication->tags) > 0)
                        <h4 class="research__name">
                            @lang('sidebar.keywords')
                        </h4>
                        <div class="ep-aside__group">
                            @foreach ($publication->tags as $tag)
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
                        @if ($publication->translate(\App::getLocale())->pdf)
                            <a class="btn btn--black research__btn link-reset" href="{{$publication->translate(\App::getLocale())->pdf}}" target="_blank">
                                <span>
                                    @lang('sidebar.view_pdf')
                                </span>
                                <svg width="13" height="10" viewBox="0 0 13 10" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8.89101 0.745718L12.7416 4.40679C13.0861 4.73441 13.0861 5.26559 12.7416 5.59321L8.89101 9.25428C8.54643 9.58191 7.98776 9.58191 7.64318 9.25428C7.2986 8.92666 7.2986 8.39548 7.64318 8.06785L9.98746 5.83893H0.882353C0.395043 5.83893 0 5.46333 0 5C0 4.53667 0.395043 4.16107 0.882353 4.16107H9.98746L7.64318 1.93215C7.2986 1.60452 7.2986 1.07334 7.64318 0.745718C7.98776 0.418094 8.54643 0.418094 8.89101 0.745718Z"
                                        fill="white" />
                                </svg>
                            </a>
                        @endif
                    </div>
                </aside>
            </div>
        </div>
        <div class="other-research">
            <h3 class="other-research__title">
                @lang('page.other_publication')
            </h3>
            <div class="row other-news__row" id="pagination_data">
                @include('pagination.other_publications')
            </div>
            <div class="pagination" id="pagination">
                <div class="pagination__row">
                    <ul class="pagination__list list-reset">
                        <li>
                            <a href="#" class="disabled">1</a>
                        </li>
                        <li>
                            <a href="#" class="disabled">…</a>
                        </li>
                        <li>
                            <a href="#">{{$publications->lastPage()}}</a>
                        </li>
                    </ul>
                    <div class="pagination__btns">
                        <button class="btn-reset" type="button" disabled id="prev_page" page="{{$publications->firstItem()}}">
                            <svg width="19" height="16" viewBox="0 0 19 16" fill="none">
                                <path
                                    d="M18 9C18.5523 9 19 8.55228 19 8C19 7.44772 18.5523 7 18 7V9ZM0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM18 7L1 7V9L18 9V7Z"
                                    fill="var(--black)" />
                            </svg>
                        </button>
                        <button class="btn-reset" type="button" id="next_page" page="{{$publications->currentPage() + 1}}" last-page="{{$publications->lastPage()}}">
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
    loadDataInit('#pagination', loadData);
    function loadData(page, lang){
        $.ajax({
            type: "GET",
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}",
            },
            url: "/ajax/"+lang+"/other_publications?page="+page,
            success: function(data){
                $('#pagination_data').html(data);
            }
        });
    }
</script>
@endsection
