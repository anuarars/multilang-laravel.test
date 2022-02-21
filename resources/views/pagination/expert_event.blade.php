@foreach ($expert->events()->paginate(4) as $event)
    <div class="col-md-3 ep__p-col">
        <a href="{{route('events.show', $event->id)}}" class="ep-item link-reset">
            <span class="ep-item__date">
                @if (\App::getLocale() == 'ru')
                    {{ Date::parse(explode('-', $event->datetimes)[0])->locale(\App::getLocale())->format('d M Y') }} 
                @else
                    {{ Date::parse(explode('-', $event->datetimes)[0])->locale(\App::getLocale())->format('M d, Y') }}
                @endif 
                <br>
                {{$event->city ?? ""}}
            </span>
            <p class="ep-item__text serif-big">
                {{$event->title}}
            </p>
        </a>
    </div>
@endforeach