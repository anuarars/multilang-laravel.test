@extends('layouts.app')

@section('body')
<section class="search-results pb200">
    <div class="container">
        <span class="italic">
            {{count($publications) + count($events) + count($news)}} results
        </span>
        @if (count($publications) > 0)
            <h2 class="search-results__title titleObserver">
                @lang('menu.publication')
            </h2>
            <div class="row sr-row">
                @foreach ($publications as $publication)
                    <div class="col-md-3 sr-col">
                        <a href="{{route('publications.show', $publication->id)}}" class="pub-item link-reset">
                            <div class="publications__item-date search-results__date">
                                @if (\App::getLocale() == 'ru')
                                    {{ Date::parse($publication->created_at)->locale(\App::getLocale())->format('d F Y') }} 
                                @else
                                    {{ Date::parse($publication->created_at)->locale(\App::getLocale())->format('M d, Y') }}
                                @endif 
                            </div>
                            <div class="publications__item-content search-results-content">
                                {{$publication->title}}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif

        @if (count($news) > 0)
            <h2 class="search-results__title titleObserver mt-5">
                @lang('menu.news')
            </h2>
            <div class="row sr-row">
                @foreach ($news as $item)
                    <div class="col-md-3 sr-col">
                        <a href="{{route('news.show', $item->id)}}" class="pub-item link-reset">
                            <div class="publications__item-date search-results__date">
                                @if (\App::getLocale() == 'ru')
                                    {{ Date::parse($item->created_at)->locale(\App::getLocale())->format('d F Y') }} 
                                @else
                                    {{ Date::parse($item->created_at)->locale(\App::getLocale())->format('M d, Y') }}
                                @endif 
                            </div>
                            <div class="publications__item-content search-results-content">
                                {{$item->title}}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif

        @if (count($events) > 0)
            <h2 class="search-results__title titleObserver mt-5">
                @lang('common.event')
            </h2>
            <div class="row sr-row">
                @foreach ($events as $event)
                    <div class="col-md-3 sr-col">
                        <a href="{{route('events.show', $event->id)}}" class="pub-item link-reset">
                            <div class="publications__item-date search-results__date">
                                @if (\App::getLocale() == 'ru')
                                    {{ Date::parse($event->created_at)->locale(\App::getLocale())->format('d F Y') }} 
                                @else
                                    {{ Date::parse($event->created_at)->locale(\App::getLocale())->format('M d, Y') }}
                                @endif 
                            </div>
                            <div class="publications__item-content search-results-content">
                                {{$event->title}}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
@endsection
