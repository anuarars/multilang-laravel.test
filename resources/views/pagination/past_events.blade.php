@foreach ($pastEvents as $pastEvent)
    <div class="col-md-3 col-sm-4 other-news__col">
        <a class="upcoming-item link-reset" href="{{route('events.show', ['locale' => $locale, $pastEvent->id])}}">
            <span class="upcoming-item__date gray">
                @if (\App::getLocale() == 'ru')
                    {{ Date::parse(explode('-', $pastEvent->datetimes)[0])->locale($locale)->format('d F Y') }}
                @else
                    {{ Date::parse(explode('-', $pastEvent->datetimes)[0])->locale($locale)->format('M d, Y') }}
                @endif
                <br>
                {{$pastEvent->translate($locale)->city ?? ""}}
            </span>
            <p class="upcoming-item__text serif max-lines-limitation">
                {{$pastEvent->translate($locale)->title}}
            </p>
        </a>
    </div>
@endforeach
