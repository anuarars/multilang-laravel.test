@foreach ($publications as $publication)
    <div class="col-md-3 col-sm-6 other-col">
        <a href="{{route('publications.show', ['locale' => $locale, $publication->id])}}" class="pub-item link-reset">
            <div class="publications__item-date">
                @if ($locale == 'ru')
                    {{ Date::parse($publication->created_at)->locale($locale)->format('d M Y') }}
                @else
                    {{ Date::parse($publication->created_at)->locale($locale)->format('M d, Y') }}
                @endif
                <br />
                @if ($publication->agenda)
                    {{$publication->agenda->translate($locale)->name}}
                @endif
            </div>
            <div class="publications__item-content max-lines-limitation">
                {{$publication->translate($locale)->title}}
            </div>
        </a>
    </div>
@endforeach
