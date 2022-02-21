@foreach ($events as $item)
    <div class="col-md-3 col-sm-4 other-news__col">
        <a class="upcoming-item link-reset" href="{{route('events.show', $item->id)}}">
            <span class="upcoming-item__date gray">
                @if (\App::getLocale() == 'ru')
                    {{ Date::parse(explode('-', $item->datetimes)[0])->locale($locale)->format('d M Y') }}
                @else
                    {{ Date::parse(explode('-', $item->datetimes)[0])->locale($locale)->format('M d, Y') }}
                @endif
                <br>
                {{$item->translate($locale)->city}}
            </span>
            <p class="upcoming-item__text serif-big max-lines-limitation">
                {{$item->translate($locale)->title}}
            </p>
        </a>
    </div>
@endforeach
