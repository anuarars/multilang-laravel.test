@foreach ($upcommingEvents as $event)
    <div class="col-sm-4 col-lg-2 upcoming__col">
        <a class="upcoming-item link-reset" href="{{route('events.show', ['locale' => $locale, $event->id])}}">
            <span class="upcoming-item__date gray">
                @if (\App::getLocale() == 'ru')
                    {{ Date::parse(explode('-', $event->datetimes)[0])->locale($locale)->format('d M Y') }}
                @else
                    {{ Date::parse(explode('-', $event->datetimes)[0])->locale($locale)->format('M d, Y') }}
                @endif
                <br>
                {{$event->translate($locale)->city ?? ""}}
            </span>
            <p class="upcoming-item__text serif max-lines-limitation">
                {{$event->translate($locale)->title}}
            </p>
        </a>
    </div>
@endforeach
