@extends('layouts.app')

@section('meta_title')
@lang('common.publications')
@endsection

@section('body')
<section class="publications pb200" lang="{{\App::getLocale()}}">
    <div class="container">
        <div class="publications__main-title">
            <div class="publications__main-title--about">@lang('headers.more_then')</div>
            <div class="publications__main-title--text titleObserver">@lang('headers.publications')</div>
        </div>
        <div class="row">
            @foreach ($mainPublications as $publication)
                <div class="col-md-4 publication__col">
                    <a href="{{route('publications.show', $publication->id)}}" class="link-reset publication-item">
                        @if ($publication->image)
                            <div class="publications__item--img">
                                <picture>
                                    <source srcset="{{$publication->image}}"
                                        media="(max-width: 767px)">
                                    <img src="{{$publication->image}}" srcset="{{$publication->image}}"
                                        alt="{{$publication->image}}">
                                </picture>
                            </div>
                        @endif
                        <div class="publications__item--title">
                            {{$publication->title}}
                        </div>
                        <div class="publications__item--content">
                            {{Str::words($publication->content, 50)}}
                        </div>
                        <div class="publications__item--about">
                            <div class="publications__item--date">
                            @if (\App::getLocale() == 'ru')
                                {{ Date::parse($publication->created_at)->locale(\App::getLocale())->format('d M Y') }}
                            @else
                                {{ Date::parse($publication->created_at)->locale(\App::getLocale())->format('M d, Y') }}
                            @endif
                            </div>
                            @if ($publication->agenda)
                                <div class="publications__item--type">{{{$publication->agenda->name}}}</div>
                            @endif
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        @if (count($blocks) > 0)
        @foreach ($blocks as $block)
        <div class="publications__covid">
            <div class="publications__title">
                @if ($block->tag_id != null)
                {{ \App\Models\Tag::where('id', $block->tag_id)->first()->name }}
                @endif
                @if ($block->agenda_id != null)
                {{ \App\Models\Agenda::where('id', $block->agenda_id)->first()->name }}
                @endif
            </div>
            <div class="row">
                @if ($block->agenda_id != null)
                @foreach (\App\Models\Publication::where('agenda_id', $block->agenda_id)->limit(4)->get() as
                $agendaPublication)
                <div class="col-md-4 col-lg-2 covid-col">
                    <a href="{{route('publications.show', $agendaPublication->id)}}" class="pub-item link-reset">
                        <div class="publications__item-date">
                            {{ Date::parse($agendaPublication->created_at)->locale(\App::getLocale())->format('d F Y') }}
                        </div>
                        <div class="publications__item-content">{{$agendaPublication->title}}
                        </div>
                    </a>
                </div>
                @endforeach
                @endif

                @if ($block->tag_id != null)
                @foreach (\App\Models\Tag::where('id', $block->tag_id)->first()->publications->take(4) as
                $tagPublications)
                <div class="col-md-4 col-lg-2 covid-col">
                    <a href="{{route('publications.show', $tagPublications->id)}}" class="pub-item link-reset">
                        <div class="publications__item-date">
                            {{ Date::parse($tagPublications->created_at)->locale(\App::getLocale())->format('d F Y') }}
                        </div>
                        <div class="publications__item-content">{{$tagPublications->title}}
                        </div>
                    </a>
                </div>
                @endforeach
                @endif
            </div>
        </div>
        @endforeach
    @endif
    @if (count($blocks) > 0)
        @foreach ($blocks as $block)
            <div class="publications__author">
                @if ($block->expert_id != null)
                <div class="publications__title">@lang('common.author-column')</div>
                <div class="row">
                    @foreach (\App\Models\Expert::where('id', $block->expert_id)->first()->publications->take(3) as
                    $expertPublications)
                    <div class="col-md-4 author-col">
                        <a href="{{route('publications.show', $expertPublications->id)}}" class="author-item link-reset">
                            <div class="publications__item-content">{{$expertPublications->title}}</div>
                            <div class="publications__item-about">{{$expertPublications->agenda->name}}</div>
                        </a>
                    </div>
                    @endforeach
                </div>
                @endif
                @if ($block->expert_id != null)
                <div class="publications__signature">
                    <div class="publications__signature--about">
                        {{ \App\Models\Expert::where('id', $block->expert_id)->first()->description }}
                    </div>
                    <div class="publications__professor">
                        <img class="publications__professor--avatar" style="max-width:50%"
                            src="{{ \App\Models\Expert::where('id', $block->expert_id)->first()->image}}"
                            alt="{{ \App\Models\Expert::where('id', $block->expert_id)->first()->image}}">
                        <div class="publications__professor--person">
                            <div class="publications__professor--name">
                                {{ \App\Models\Expert::where('id', $block->expert_id)->first()->name }}
                            </div>
                            <div class="publications__professor--rank">
                                {{ \App\Models\Expert::where('id', $block->expert_id)->first()->jobTitle }}</div>
                        </div>
                        <img class="publications__professor--signature" src="{{asset('templates/v2/img/signature2.png')}}"
                            srcset="{{asset('templates/v2/img/signature2.png 1x')}}, {{asset('templates/v2/img/signature2@2x.png 2x')}}"
                            alt="">
                    </div>
                </div>
                @endif
            </div>
            @endforeach
        @endif
        <div class="publications__other">
            <div class="publications__title">@lang('page.other_publication')</div>
            <div class="row" id="pagination_data">
                @include('pagination.other_publications')
            </div>
            <div class="pagination" id="pagination">
                <div class="pagination__row">
                    <ul class="pagination__list list-reset">
                        <li>
                            <a href="#" class="disabled" id="first_page_on">1</a>
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
