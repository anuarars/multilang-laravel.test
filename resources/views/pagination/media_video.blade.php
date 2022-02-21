@foreach ($videos as $video)
    <div class="col-md-4 media-col">
        <div class="media-item">
            <div class="video media-item__image LazyVideoYt" data-id="{{substr($video->url, 32)}}" data-alt=""
                data-params="modestbranding=1&showinfo=0&controls=1&vq=hd720&autoplay=1" tabindex="0">
                <div class="video__play">
                    <svg width="9" height="13" viewBox="0 0 9 13" fill="none">
                        <path
                            d="M0 1.95576C0 1.13999 0.924163 0.667451 1.58549 1.14508L7.87752 5.68932C8.4302 6.08848 8.4302 6.91152 7.87752 7.31068L1.58549 11.8549C0.924163 12.3325 0 11.86 0 11.0442V1.95576Z"
                            fill="white" />
                    </svg>
                    <span>Video</span>
                </div>
            </div>
            <p class="media-item__text">
                {{-- {{$video->mediabank->event->title}}<br> --}}
                {{-- {{$video->mediabank->event->city}}. {{ Date::parse(explode('-', $video->mediabank->event->datetimes)[0])->locale(\App::getLocale())->format('d F Y') }}. <br> --}}
                {{-- {{$video->mediabank->event->agenda->name}} --}}
            </p>
        </div>
    </div>
@endforeach