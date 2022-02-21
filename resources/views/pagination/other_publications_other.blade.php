@foreach ($publications as $publication)
    <div class="col-md-3 col-sm-4 other-news__col">
        <a class="upcoming-item link-reset" href="{{route('publications.show', $publication->id)}}">
            <span class="upcoming-item__date gray">
                @if (\App::getLocale() == 'ru')
                    {{ Date::parse($publication->created_at)->locale(\App::getLocale())->format('d M Y') }}
                @else
                    {{ Date::parse($publication->created_at)->locale(\App::getLocale())->format('M d, Y') }}
                @endif
            </span>
            <p class="upcoming-item__text serif-big">
                {{$publication->title}}
            </p>
        </a>
    </div>
@endforeach
