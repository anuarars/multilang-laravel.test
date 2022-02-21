@extends('layouts.app')

@section('meta_title')
    @lang('common.library')
@endsection

@section('body')
<section class="library pb200">
    <div class="container">
        <div class="library__top">
            <div class="library__left">
              <span class="italic">
                @lang('headers.unique')
              </span>
              <h1 class="library__title titleObserver">
                @lang('headers.library')
              </h1>
            </div>
            <div class="library__right">
              <div class="library__resourses">
                @lang('page.e_resource')
              </div>
              <a href="http://library.iclrc.ru/" class="more-link more-link--text link-reset" target="_blank">
                @lang('page.view_catalog')
                <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                  <g opacity="0.5">
                  <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </g>
                </svg>
              </a>
            </div>
        </div>
        <div class="row">
            @foreach ($news->take(3) as $newsItem)
                <div class="col-md-4">
                    <article class="library-item">
                        @if ($newsItem->image)
                            <img class="library-item__image" src="{{$newsItem->image}}" alt="library image">
                        @endif
                        <strong class="library-item__title">
                            {{Str::words($newsItem->title, 10)}}
                        </strong>
                        <p class="library-item__text">
                            {!!Str::words($newsItem->content, 20)!!}
                        </p>
                        <span class="library-item__date gray">
                            @if (\App::getLocale() == 'ru')
                                {{ Date::parse($newsItem->created_at)->locale(\App::getLocale())->format('d F Y') }}
                            @else
                                {{ Date::parse($newsItem->created_at)->locale(\App::getLocale())->format('M d, Y') }}
                            @endif
                        </span>
                    </article>
                </div>
            @endforeach
        </div>
        <h3 class="library-partners__title">
            @lang('common.partners')
        </h3>
        <div class="row lp-row">
            @foreach ($partners as $partner)
                <div class="col-md-3 lp-col">
                    <a href="{{$partner->link}}" class="lp-item link-reset" style="width: 100%;">
                        <div class="lp-item__image">
                            <img src="{{$partner->image}}">
                            <img src="{{$partner->image_hover}}">
                          </div>
                        <p class="lp-item__text">
                            {{$partner->name}}
                        </p>
                        {{-- <span class="lp-item__info gray">
                            {{$partner->country}}
                        </span> --}}
                    </a>
                </div>
            @endforeach
        </div>
        <h3 class="library-donators__title">
            @lang('common.donators')
            <span class="gray">
                @lang('common.people')
            </span>
        </h3>
        <div class="row donators__row">
            @foreach ($donators->where('type', 'person') as $donator)
                <div class="col-md-3 donators__col">
                    <div class="dotanors-item">
                        <strong class="dotanors-item__title">
                            {{$donator->name}}
                        </strong>
                        <p class="dotanors-item__text">
                            {{$donator->description}}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        <h3 class="library-donators__title library-donators__title--2">
            @lang('common.donators')
            <span class="gray">
                @lang('common.organizations')
            </span>
        </h3>
        <div class="row donators__row">
            @foreach ($donators->where('type', 'organization') as $organization)
                <div class="col-md-3 donators__col">
                    <div class="dotanors-item">
                        <strong class="dotanors-item__title">
                            {{$organization->name}}
                        </strong>
                        <p class="dotanors-item__text">
                            {{Str::words($organization->description, 10)}}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        <h3 class="recommend-title">
            @lang('library.form.title')
        </h3>
        <p class="recommend-text serif-big">
            @lang('library.form.about')
        </p>
        <form action="{{route('library.recommend')}}" method="POST">
            @csrf
            <div class="recommend-grid">
                <div class="modal-input modal-input--white">
                    <label class="modal-input__label modal-input__label--white">
                        <input class="modal-input__field input-reset" name="name" type="text" placeholder="Full name">
                        <span class="modal-input__placeholder">@lang('library.form.full_name')</span>
                    </label>
                </div>
                <div class="modal-input modal-input--white">
                    <label class="modal-input__label modal-input__label--white">
                        <input class="modal-input__field input-reset" name="phone" type="tel" placeholder="Phone number">
                        <span class="modal-input__placeholder">@lang('library.form.phone')</span>
                    </label>
                </div>
                <div class="modal-input modal-input--white">
                    <label class="modal-input__label modal-input__label--white">
                        <input class="modal-input__field input-reset" name="email" type="email" placeholder="Email">
                        <span class="modal-input__placeholder">@lang('library.form.mail')</span>
                    </label>
                </div>
                <div class="modal-input modal-input--white">
                    <label class="modal-input__label modal-input__label--white">
                        <input class="modal-input__field input-reset" name="occupation" type="text" placeholder="Occupation">
                        <span class="modal-input__placeholder">@lang('library.form.position')</span>
                    </label>
                </div>
                <div class="modal-input modal-input--white">
                    <label class="modal-input__label modal-input__label--white">
                        <input class="modal-input__field input-reset" name="book" type="text" placeholder="Title of the book or database">
                        <span class="modal-input__placeholder">@lang('library.form.book')</span>
                    </label>
                </div>
                <div class="modal-input modal-input--white">
                    <label class="modal-input__label modal-input__label--white">
                        <input class="modal-input__field input-reset" name="author" type="text" placeholder="Author">
                        <span class="modal-input__placeholder">@lang('library.form.author')</span>
                    </label>
                </div>
                <div class="modal-input modal-input--white">
                    <label class="modal-input__label modal-input__label--white">
                        <input class="modal-input__field input-reset" name="year" type="text" placeholder="Year of publication">
                        <span class="modal-input__placeholder">@lang('library.form.year')</span>
                    </label>
                </div>
                <div class="modal-input modal-input--white">
                    <label class="modal-input__label modal-input__label--white">
                        <input class="modal-input__field input-reset" name="link" type="url" placeholder="URL">
                        <span class="modal-input__placeholder">@lang('library.form.url')</span>
                    </label>
                </div>
            </div>
            <div class="recomend-bottom">
                <div class="recomend-bottom__group">
                    <label class="modal__checkbox modal__checkbox--black">
                        <input type="checkbox" class="input-reset">
                    </label>
                    <a href="#" class="more-link link-reset">
                        @lang('library.form.personal_data')
                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                            <g opacity="0.5">
                                <path d="M1.92893 9.07107L9 2" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>
                    </a>
                </div>
                <button class="btn btn--black recommend-btn btn-reset" type="submit">
                    <span>
                        @lang('library.form.btn')
                    </span>
                    <svg width="13" height="10" viewBox="0 0 13 10" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.89101 0.745718L12.7416 4.40679C13.0861 4.73441 13.0861 5.26559 12.7416 5.59321L8.89101 9.25428C8.54643 9.58191 7.98776 9.58191 7.64318 9.25428C7.2986 8.92666 7.2986 8.39548 7.64318 8.06785L9.98746 5.83893H0.882353C0.395043 5.83893 0 5.46333 0 5C0 4.53667 0.395043 4.16107 0.882353 4.16107H9.98746L7.64318 1.93215C7.2986 1.60452 7.2986 1.07334 7.64318 0.745718C7.98776 0.418094 8.54643 0.418094 8.89101 0.745718Z" fill="white"/>
                    </svg>
                </button>
            </div>
        </form>
    </div>
</section>
@endsection
