<!DOCTYPE html>
<html class="page" lang="{{$app_locale}}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:image" content="path/to/image.jpg">
    <meta name="theme-color" content="#000">

    <title>ICLRC</title>

    <link rel="icon" href="{{asset('templates/v2/img/favicon/apple-touch-icon-180x180.png')}}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{asset('templates/v2/img/favicon/apple-touch-icon-180x180.png')}}">
    <link rel="stylesheet" href="{{asset('templates/v2/fonts/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('templates/v2/css/styles.min.css')}}">
    <link rel="stylesheet" href="{{asset('templates/v2/css/main.css')}}">
</head>

<body class="page__body page__body--new parallax">
    <header class="page-header page-header--dark page-header--new">
        <div class="container">
            <div class="page-header__row">
                <a href="/" class="logo">
                    @if (\App::getLocale() == 'ru')
                    <img src="{{asset('templates/v2/img/logo_ru.png')}}"
                    srcset="{{asset('templates/v2/img/logo_ru.png')}} 1x, {{asset('templates/v2/img/logo/logo-main@2x.png')}} 2x"
                    alt="logo">
                    @else
                        <img src="{{asset('templates/v2/img/logo/logo-main.png')}}"
                    srcset="{{asset('templates/v2/img/logo/logo-main.png')}} 1x, {{asset('templates/v2/img/logo/logo-main@2x.png')}} 2x"
                    alt="logo">
                    @endif
                </a>
                <nav class="menu" id="navigation">
                    <button type="button" class="menu__close btn-reset">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                            <path d="M13 1.41959L1 12.7483" stroke="white" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M1 1.41959L13 12.7483" stroke="white" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                    @include('includes.'.$app_locale.'-upper-menu')
                </nav>
                <button class="hamburger HamburgerButton btn-reset" type="button" aria-controls="navigation"
                    aria-expanded="false">
                    <svg width="20" height="14" viewBox="0 0 20 14" fill="none">
                        <path d="M0 4H20" stroke="#3E3E3E" stroke-width="2" />
                        <path d="M0 10H15" stroke="#3E3E3E" stroke-width="2" />
                    </svg>
                </button>
            </div>
        </div>
        @include('includes.modal-menu')

    </header>

    <main class="page-main">

        <section class="main">
            <div class="container">
                <picture class="main__picture">
                    <source srcset="{{asset('templates/v2/img/shape-375-w.png')}}"
                        srcset="{{asset('templates/v2/img/shape-375-w.png')}} 1x, {{asset('templates/c2/img/shape-375-w@2x.png')}} 2x"
                        media="(max-width: 767px)">
                    <source srcset="{{asset('templates/v2/img/shape-768-w.png')}}"
                        srcset="{{asset('templates/v2/img/shape-768-w.png')}} 1x, {{asset('templates/c2/img/shape-768-w@2x.png')}} 2x"
                        media="(max-width: 1199px)">
                    <source srcset="{{asset('templates/v2/img/shape-1360-w.png')}}"
                        srcset="{{asset('templates/v2/img/shape-1360.png')}} 1x, {{asset('templates/c2/img/shape-1360-w@2x.png')}} 2x"
                        media="(max-width: 1679px)">
                    <img class="parallax__layer" data-depth="0.1" src="{{asset('templates/v2/img/shape-1920-w.png')}}"
                        srcset="{{asset('templates/v2/img/shape-1920-w.png')}} 1x, {{asset('templates/v2/img/shape-1920-w@2x.png')}} 2x,"
                        alt="shape">
                </picture>
            </div>
            <div class="container main__container">
                <h1 class="main__title">
                    {!!\App\Models\Settings::where('name', 'Slogan')->first()->translate($app_locale)->content!!}
                </h1>
                <div class="main-event">
                    @if ($currentEvent->is_active)
                    <div class="main-event__top">
                        <div class="dot-red"></div>
                        @lang('common.current-event')
                    </div>
                    <a href="{{route('events.show', $currentEvent->event_id)}}"
                        class="more-link main-event__link link-reset">
                        {{$currentEvent->description}}
                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                            <path d="M1.92892 9.07106L9 2" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                    @endif
                </div>
                <div class="numbersAnimation numbers-top" data-lang="{{ $app_locale }}">

                </div>
            </div>
        </section>


    </main>
    <footer class="footer-main">
        <div class="container-footer">
            <div class="main-event main-event--footer">
                <div class="main-event__top">
                    <div class="dot-red"></div>
                    Right now
                </div>
                <a href="#" class="more-link main-event__link link-reset">
                    Investor-state dispute settlement <br>
                    reform: the way forward
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                        <path d="M1.92892 9.07106L9 2" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </a>
            </div>
            <div class="footer-row">
                <div class="footer-row__left">
                    <div class="footer__col footer__col--1">
                        <a href="{{route('agendas.show', $agenda->id)}}" class="footer-item link-reset">
                          <strong class="gray footer__col-name">
                              @lang('common.agenda')
                          </strong>
                          <p class="footer__col-text serif max-lines-limitation">
                            {{Str::words(strip_tags($agenda->translate(\App::getLocale())->short_description), 15 ?? "")}}
                          </p>
                        </a>
                      </div>
                      <div class="footer__col footer__col--2">
                        <a href="{{route('publications.show', $publication->id)}}" class="footer-item link-reset">
                          <strong class="gray footer__col-name">
                              @lang('common.publications')
                            </strong>
                            <p class="footer__col-text serif max-lines-limitation">
                                {{Str::words($publication->title, 10 ?? "")}}
                            </p>
                        </a>
                      </div>
                      <div class="footer__col footer__col--3">
                        <a href="{{route('events.show', $event->id)}}" class="footer-item link-reset">
                          <strong class="gray footer__col-name">
                              @lang('home.events')
                          </strong>
                          <p class="footer__col-text serif max-lines-limitation">
                              {{Str::words($event->title, 10)}}
                              <br>

                          </p>
                        </a>
                      </div>
                      <div class="footer__col footer__col--4">
                        <a href="{{route('news.show', $newsItem->id)}}" class="footer-item link-reset">
                          <strong class="gray footer__col-name">
                              @lang('menu.news')
                          </strong>
                          <p class="footer__col-text serif max-lines-limitation">
                            {{Str::words($newsItem->title, 10)}}
                          </p>
                        </a>
                    </div>
                    <div class="footer__bottom-row">
                        <blockquote class="footer-quote">
                            {!!\App\Models\Settings::where('name',
                            'SmallSlogan')->first()->translate($app_locale)->content!!}
                        </blockquote>
                        <div class="numbers-animation numbersAnimation" data-lang="{{ $app_locale }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{asset('templates/v2/js/scripts.min.js')}}"></script>
    <script src="{{asset('templates/v2/js/common.js')}}"></script>
</body>

</html>
