@foreach ($news as $newsItem)
    <div class="col-md-3 col-sm-4 other-news__col">
        <a class="upcoming-item link-reset" href="{{route('news.show', ['locale' => $locale, $newsItem->id])}}">
            <span class="upcoming-item__date gray">
                @if (\App::getLocale() == 'ru')
                    {{ Date::parse($newsItem->created_at)->locale($locale)->format('d M Y') }}
                @else
                    {{ Date::parse($newsItem->created_at)->locale($locale)->format('M d, Y') }}
                @endif
                <br>
                @if ($newsItem->agenda)
                    {{$newsItem->agenda->translate($locale)->name}}
                @endif
            </span>
            <p class="upcoming-item__text serif max-lines-limitation">
                {{$newsItem->translate($locale)->title}}
            </p>
        </a>
    </div>
@endforeach
