@foreach ($expert->publications()->paginate(4) as $publication)
    <div class="col-md-3 ep__p-col">
        <a href="{{route('publications.show', $publication->id)}}" class="ep-item link-reset">
            <span class="ep-item__date">
                @if (\App::getLocale() == 'ru')
                    {{ Date::parse($publication->created_at)->locale(\App::getLocale())->format('d M Y') }} 
                @else
                    {{ Date::parse($publication->created_at)->locale(\App::getLocale())->format('M d, Y') }}
                @endif 
                <br>
                {{$publication->type->name}}
            </span>
            <p class="ep-item__text serif-big">
                {{$publication->title}}
            </p>
        </a>
    </div>
@endforeach