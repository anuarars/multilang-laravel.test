@foreach ($images as $image)
<div class="col-md-4 media-col mediaGallery">
    <div class="media-item mediaItem">
        <div class="media-item__image">
            <div class="media-item__info">
                <span class="photoCount"></span>&nbsp;photos
            </div>
            <img src="{{$image->gallery->where('type', 'image')->first()->url}}"
                alt="{{$image->gallery->where('type', 'image')->first()->url}}">
        </div>
        <p class="media-item__text">
            {{-- {{$image->event->title}}<br>
            {{$image->event->city}}.
            {{ Date::parse(explode('-', $image->event->datetimes)[0])->locale(\App::getLocale())->format('d F Y') }}.
            <br>
            {{$image->event->agenda->name}} --}}
        </p>
    </div>
    <div class="media-slider mediaSlider">
        <div class="swiper mySwiper2 slider-top">
            <div class="swiper-pagination"></div>
            <button class="slider-top__cross mediaSliderClose btn-reset" type="button">
                <svg width="24" height="24" viewBox="0 0 24 24">
                    <path d="M18 6L6 18" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M6 6L18 18" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <div class="swiper-wrapper">
                @foreach ($image->gallery->where('type', '=', 'image') as $item)
                <div class="swiper-slide">
                    <img src="{{$item->url}}">
                </div>
                @endforeach
            </div>
        </div>
        <div class="swiper mySwiper slider-bottom">
            <div class="swiper-wrapper">
                @foreach ($image->gallery->where('type', '=', 'image') as $item)
                <div class="swiper-slide">
                    <img src="{{$item->url}}">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endforeach
