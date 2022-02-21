<!DOCTYPE html>
<html class="page" lang="{{$app_locale}}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:image" content="path/to/image.jpg">

    <title>@yield('meta_title', config('app.name', 'Laravel'))</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{asset('templates/v2/img/favicon/apple-touch-icon-180x180.png')}}">
    <link rel="stylesheet" href="{{ asset('templates/v2/fonts/fonts.css') }}">
    <link rel="stylesheet" href="{{asset('templates/v2/css/styles.min.css')}}">
    <link rel="stylesheet" href="{{asset('templates/v2/css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{asset('templates/v2/js/load-data.js')}}"></script>
</head>

<body class="page__body">
    <header class="page-header">
        <div class="container">
            <div class="page-header__row">
                <a href="/" class="logo">
                    <img src="{{asset('templates/v2/img/logo/logo-main.png')}}"
                        srcset="{{asset('templates/v2/img/logo/logo-main.png')}} 1x, {{asset('templates/v2/img/logo/logo-main@2x.png')}} 2x"
                        alt="logo">
                </a>
                <nav class="menu" id="navigation">
                    <button type="button" class="menu__close btn-reset">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                            <path d="M13 1.41959L1 12.7483" stroke="white" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M1 1.41959L13 12.7483" stroke="white" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <ul class="menu__list list-reset">
                        <li><a href="" class="">Повестки</a></li>
                        <li><a href="" class="">Публикации</a></li>
                        <li><a href="" class="">Мероприятия</a></li>
                        <li><a href="" class="">Проекты</a></li>
                        <li><a href="" class="">Библиотека</a></li>
                        <li><a href="" class="">Новости</a></li>
                        <li><a href="" class="">О Центре</a></li>
                    </ul>
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
        <div class="modal-menu-header NavigationList">
            <div class="modal-menu-header__body">
                <div class="container modal-menu-header__container">
                    <div class="page-header__row">
                        <a href="/" class="logo-animate">
                            <svg width="44" height="32" viewBox="0 0 44 32" fill="none">
                                <path d="M22 0H12V10H22V0Z" fill="white" />
                                <path d="M44 6H34V16H44V6Z" fill="white" />
                                <path d="M10 17H0V27H10V17Z" fill="white" />
                                <path d="M33 22H23V32H33V22Z" fill="white" />
                                <path d="M34 21.7157V32L44 26.8328V17L34 21.7157Z" fill="white" />
                                <path d="M0 5.71572V16L10 10.8829V1L0 5.71572Z" fill="white" />
                                <path d="M12 15.6812V26L22 20.8658V11L12 15.6812Z" fill="white" />
                                <path d="M23 10.7157V21L33 15.8328V6L23 10.7157Z" fill="white" />
                            </svg>
                            <div class="logo-animate__right">
                                <span>ICLRC</span>
                                <div class="logo-animate__area">
                                    <span class="logo-animate__text active">
                                        Research
                                    </span>
                                    <span class="logo-animate__text">
                                        Dialogue
                                    </span>
                                    <span class="logo-animate__text">
                                        Evolution
                                    </span>
                                </div>
                            </div>
                        </a>
                        <button class="hamburger HamburgerButton btn-reset NavigationListClose" type="button"
                            aria-controls="navigation" aria-expanded="false">
                            <svg width="20" height="10" viewBox="0 0 20 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.07905 10L0.319447 5.6972C-0.106483 5.31215 -0.106483 4.68785 0.319447 4.3028L5.07905 0L6.62148 1.3944L3.72375 4.01401L20 4.01401L20 5.98599L3.72375 5.98599L6.62148 8.60561L5.07905 10Z"
                                    fill="white" />
                            </svg>

                        </button>
                    </div>
                    <div class="row modal-menu-header__row">
                        <div class="modal-menu-header__title gray">
                            @lang('common.sitemap')
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="modal-menu-header--item modal-menu-header--title">@lang('common.agendas')</a>
                            @foreach ($agendas as $agenda)
                            <a href="#"
                                class="modal-menu-header--item">{{$agenda->name}}</a>
                            @endforeach
                            <a href="#"
                                class="modal-menu-header--item modal-menu-header--title">@lang('common.publications')</a>
                        </div>
                        <div class="col-md-4">
                            <a href="#"
                                class="modal-menu-header--item modal-menu-header--title">@lang('common.event')</a>
                            <a href="#"
                                class="modal-menu-header--item modal-menu-header--title">@lang('common.projects')</a>
                            <a href="#" class="modal-menu-header--item">{{\App\Models\Project::find(1)->name}}</a>
                            <div class="modal-menu-header--item">The summer school on <br> public international law
                            </div>
                            <a href="#"
                                class="modal-menu-header--item modal-menu-header--title">@lang('common.library')</a>
                            <a href="#"
                                class="modal-menu-header--item modal-menu-header--title">@lang('news.news.heading')</a>
                        </div>
                        <div class="col-md-4">
                            <a href="#"
                                class="modal-menu-header--item modal-menu-header--title">@lang('common.aboutcenter')</a>
                            <a href="#" class="modal-menu-header--item">@lang('common.transparency')</a>
                            <a href="#"  class="modal-menu-header--item">People</a>
                            <a href="#"
                                class="modal-menu-header--item modal-menu-header--subitem">@lang('common.our-team')</a>
                            <a href="#"
                                class="modal-menu-header--item modal-menu-header--subitem">@lang('common.experts-speakers')</a>
                            <a href="#"
                                class="modal-menu-header--item">@lang('common.partners')</a>
                            <a href="#"
                                class="modal-menu-header--item">@lang('common.clients')</a>
                            <a class="modal-menu-header--item" href="#">@lang('common.media')</a>
                            <div class="modal-menu-header--item modal-menu-header--title modal-menu-header--language">
                                <div class="language">
                                    {!! langSwitcher($app_locale, ['ru', 'en']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="page-main">
        @yield('body')
    </main>

    <footer class="page-footer">
        <div class="container">
            <div class="page-footer__top">
                <div class="page-footer__col">
                    <strong class="gray page-footer__title">
                        @lang('common.sitemap')
                    </strong>
                    <ul class="list-reset page-footer__list">
                        <li><a href="#">@lang('common.agendas')</a></li>
                        <li><a href="#">@lang('common.publications')</a></li>
                        <li><a href="#">@lang('common.event')</a></li>
                        <li><a href="#">@lang('common.projects')</a></li>
                        <li><a href="#">@lang('common.library')</a></li>
                        <li><a href="#">@lang('news.news.heading')</a></li>
                        <li><a href="#">@lang('common.aboutcenter')</a></li>
                    </ul>
                </div>
                <div class="page-footer__col">
                    <strong class="gray page-footer__title">
                        @lang('common.popular_tags')
                    </strong>
                    <ul class="list-reset page-footer__list">
                        @foreach ($popular_tags as $popular_tag)
                        <li><a href="#">{{$popular_tag->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="page-footer__col">
                    <strong class="gray page-footer__title">
                        Recommended for reading
                    </strong>
                    <ul class="list-reset page-footer__list">
                        <li><a href="#">Public International law</a></li>
                        <li><a href="#">National jurisdiction</a></li>
                        <li><a href="#">Extraterritorial jurisdiction</a></li>
                        <li><a href="#">Foreign investments</a></li>
                        <li><a href="#">Responsibility of states</a></li>
                        <li><a href="#">Diplomatic protection</a></li>
                        <li><a href="#">International investment law</a></li>
                    </ul>
                </div>
                <div class="page-footer__col">
                    <strong class="gray page-footer__title">
                        Important now
                    </strong>
                    <ul class="list-reset page-footer__list">
                        @foreach ($footerEvents as $footerEvent)
                            <li><a href="/">{{$footerEvent->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="page-footer__col page-footer__mobile-top">
                    <strong class="gray page-footer__title">
                        Language
                    </strong>
                    <div class="language mb20">
                        {!! langSwitcher($app_locale, ['ru', 'en']) !!}
                    </div>
                    <strong class="gray page-footer__contacts">
                        @lang('common.contacts')
                    </strong>
                    <p class="page-footer__text">
                        {!!\App\Models\Settings::where('name', 'Contacts')->first()->translate($app_locale)->content!!}
                    </p>
                    <strong class="gray page-footer__follow">
                        Follow us
                    </strong>
                    <div class="social" role="list">
                        <a href="{{$network[0]->facebook}}" aria-label="facebook" target="_blank">
                            <img src="{{asset('templates/v2/svg/facebook.svg')}}" alt="rwa">
                        </a>
                        <a href="{{$network[0]->youtube}}" aria-label="youtube" target="_blank">
                            <img src="{{asset('templates/v2/svg/youtube.svg')}}" alt="rwa">
                        </a>
                        <a href="{{$network[0]->instagram}}" aria-label="instagram" target="_blank">
                            <img src="{{asset('templates/v2/svg/instagram.svg')}}" alt="rwa">
                        </a>
                        <a href="{{$network[0]->linkedin}}" aria-label="linkedin" target="_blank">
                            <img src="{{asset('templates/v2/svg/linkedin.svg')}}" alt="rwa">
                        </a>
                    </div>
                </div>
            </div>
            <div class="page-footer__bottom">
                <small class="copy gray">
                    {!!\App\Models\Settings::where('name', 'Copyright')->first()->translate($app_locale)->content!!}
                </small>
                <a href="#" class="link-reset development" target="_blank">
                    <svg width="18" height="31" viewBox="0 0 18 31" fill="none">
                        <path d="M0 17.5V11.5L6 5.5L9 8.5L17.5 0V6L9 14.5L6 11.5L0 17.5Z" fill="#BEBEBE" />
                        <path d="M0 30.5V24.5L6 18.5L9 21.5L17.5 13V19L9 27.5L6 24.5L0 30.5Z" fill="#BEBEBE" />
                    </svg>
                    <span>
                        Made by Uprising <br>
                        2021
                    </span>
                </a>
            </div>
        </div>
    </footer>

    <form class="filtersForm" action="#" method="GET">
        <div class="modal modalFilter modal--filter" role="dialog" aria-modal="true">
            <div class="modal-wrap">
                <div class="modal__content">
                    <div class="modal__body h100">
                        <div class="container h100">
                            <button class="modal__close modalClose btn-reset" type="button" aria-label="Close modal">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M18 6L6 18" stroke="#fff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M6 6L18 18" stroke="#fff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                            <div class="filters-wrap h100">
                                <div class="filters">
                                    <button class="filters__btn btn-reset filtersBtnOpen filtersTitleAgenda"
                                        type="button">
                                        <strong class="h2 filters__btn-title" data-count="">
                                            @lang('common.agenda')
                                        </strong>
                                        <span class="filters__btn-text">
                                            Choose agenda
                                        </span>
                                    </button>
                                    <div class="filters-modal filtersModal modalAgenda">
                                        <div class="modal-wrap">
                                            <div class="modal__content h100">
                                                <div class="container h100">
                                                    <button class="modal__close filtersModalClose btn-reset"
                                                        type="button" aria-label="Close modal">
                                                        <svg width="20" height="10" viewBox="0 0 20 10" fill="none">
                                                            <path
                                                                d="M5.07905 10L0.319447 5.6972C-0.106483 5.31215 -0.106483 4.68785 0.319447 4.3028L5.07905 0L6.62148 1.3944L3.72375 4.01401L20 4.01401L20 5.98599L3.72375 5.98599L6.62148 8.60561L5.07905 10Z"
                                                                fill="white" />
                                                        </svg>
                                                    </button>
                                                    <div class="filters-wrap">
                                                        <h2 class="fm-title filters__btn-title" data-count="">
                                                            @lang('common.agendas')
                                                        </h2>
                                                        <div class="fm-row fm-row--not row">
                                                            <div class="col-md-2">
                                                                @for ($i = 0; $i < count($letters_agendas)/2; $i++)
                                                                    <div class="fm-item" data->
                                                                        <p class="fm-item__letter">
                                                                            {{$letters_agendas[$i]}}
                                                                        </p>
                                                                        @foreach (App\Models\AgendaTranslation::where('name', 'like', ''.$letters_agendas[$i].'%')->where('locale', \App::getLocale())->get() as $agenda)
                                                                            <label class="fm-item__label agenda" agenda-id="{{$agenda->id}}">
                                                                                <input class="fm-item__checkbox input-reset"
                                                                                    type="checkbox">
                                                                                <span class="fm-item__name">
                                                                                {{$agenda->name}}
                                                                                </span>
                                                                            </label>
                                                                        @endforeach
                                                                    </div>
                                                                @endfor
                                                            </div>
                                                            <div class="col-md-2">
                                                                @for ($i = count($letters_agendas)/2+1; $i < count($letters_agendas); $i++)
                                                                    <div class="fm-item">
                                                                        <p class="fm-item__letter">
                                                                            {{$letters_agendas[$i]}}
                                                                        </p>
                                                                        @foreach (App\Models\AgendaTranslation::where('name', 'like', ''.$letters_agendas[$i].'%')->where('locale', \App::getLocale())->get() as $agenda)
                                                                            <label class="fm-item__label">
                                                                                <input class="fm-item__checkbox input-reset"
                                                                                    type="checkbox" name="agenda[]"
                                                                                    value="{{$agenda->id}}">
                                                                                <span class="fm-item__name">
                                                                                {{$agenda->name}}
                                                                                </span>
                                                                            </label>
                                                                        @endforeach
                                                                    </div>
                                                                @endfor
                                                            </div>
                                                        </div>
                                                        <script>
                                                            $('.agenda').click(function(){
                                                                console.log("tes");
                                                            })
                                                        </script>
                                                        <div class="filters__buttons">
                                                            <button class="filter-submit filtersModalClose btn-reset"
                                                                type="button" disabled>
                                                                Ok
                                                                <svg width="13" height="10" viewBox="0 0 13 10"
                                                                    fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M8.89101 0.745718L12.7416 4.40679C13.0861 4.73441 13.0861 5.26559 12.7416 5.59321L8.89101 9.25428C8.54643 9.58191 7.98776 9.58191 7.64318 9.25428C7.2986 8.92666 7.2986 8.39548 7.64318 8.06785L9.98746 5.83893H0.882353C0.395043 5.83893 0 5.46333 0 5C0 4.53667 0.395043 4.16107 0.882353 4.16107H9.98746L7.64318 1.93215C7.2986 1.60452 7.2986 1.07334 7.64318 0.745718C7.98776 0.418094 8.54643 0.418094 8.89101 0.745718Z"
                                                                        fill="white" />
                                                                </svg>
                                                            </button>
                                                            <button class="filter-submit btn-reset clearCurrentFilters"
                                                                type="button" disabled>
                                                                Clear all
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="filters__buttons filters__buttons--mob">
                                                <button class="filter-submit filtersModalClose btn-reset" type="button"
                                                    disabled>
                                                    Ok
                                                    <svg class="filter-submit__arrow" width="13" height="10"
                                                        viewBox="0 0 13 10" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.89101 0.745718L12.7416 4.40679C13.0861 4.73441 13.0861 5.26559 12.7416 5.59321L8.89101 9.25428C8.54643 9.58191 7.98776 9.58191 7.64318 9.25428C7.2986 8.92666 7.2986 8.39548 7.64318 8.06785L9.98746 5.83893H0.882353C0.395043 5.83893 0 5.46333 0 5C0 4.53667 0.395043 4.16107 0.882353 4.16107H9.98746L7.64318 1.93215C7.2986 1.60452 7.2986 1.07334 7.64318 0.745718C7.98776 0.418094 8.54643 0.418094 8.89101 0.745718Z"
                                                            fill="white" />
                                                    </svg>
                                                </button>
                                                <button class="filter-submit btn-reset clearCurrentFilters"
                                                    type="button" disabled>
                                                    Clear all
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="filters__btn btn-reset filtersBtnOpen filtersTitleExperts"
                                        type="button">
                                        <strong class="h2 filters__btn-title " data-count="">
                                            Experts
                                        </strong>
                                        <span class="filters__btn-text">
                                            Choose experts
                                        </span>
                                    </button>
                                    <div class="filters-modal filtersModal modalExperts">
                                        <div class="modal-wrap">
                                            <div class="modal__content h100">
                                                <div class="container h100">
                                                    <button class="modal__close filtersModalClose btn-reset"
                                                        type="button" aria-label="Close modal">
                                                        <svg width="20" height="10" viewBox="0 0 20 10" fill="none">
                                                            <path
                                                                d="M5.07905 10L0.319447 5.6972C-0.106483 5.31215 -0.106483 4.68785 0.319447 4.3028L5.07905 0L6.62148 1.3944L3.72375 4.01401L20 4.01401L20 5.98599L3.72375 5.98599L6.62148 8.60561L5.07905 10Z"
                                                                fill="white" />
                                                        </svg>
                                                    </button>
                                                    <div class="filters-wrap">
                                                        <h2 class="fm-title fm-title--experts filters__btn-title"
                                                            data-count="">
                                                            Experts
                                                        </h2>
                                                        <div class="fm-row row">
                                                            <div class="col-md-3">
                                                                @for ($i = 0; $i < count($letters_experts)/4-1; $i++)
                                                                    <div class="fm-item">
                                                                        <p class="fm-item__letter">
                                                                            {{$letters_experts[$i]}}
                                                                        </p>
                                                                        @foreach (App\Models\ExpertTranslation::where('name', 'like', ''.$letters_experts[$i].'%')->where('locale', \App::getLocale())->get() as $agenda)
                                                                            <label class="fm-item__label">
                                                                                <input class="fm-item__checkbox input-reset"
                                                                                    type="checkbox">
                                                                                <span class="fm-item__name">
                                                                                {{$agenda->name}}
                                                                                </span>
                                                                            </label>
                                                                        @endforeach
                                                                    </div>
                                                                @endfor
                                                            </div>
                                                            <div class="col-md-3">
                                                                @for ($i = count($letters_experts)/4; $i < count($letters_experts)/2-1; $i++)
                                                                    <div class="fm-item">
                                                                        <p class="fm-item__letter">
                                                                            {{$letters_experts[$i]}}
                                                                        </p>
                                                                        @foreach (App\Models\ExpertTranslation::where('name', 'like', ''.$letters_experts[$i].'%')->where('locale', \App::getLocale())->get() as $agenda)
                                                                            <label class="fm-item__label">
                                                                                <input class="fm-item__checkbox input-reset"
                                                                                    type="checkbox">
                                                                                <span class="fm-item__name">
                                                                                {{$agenda->name}}
                                                                                </span>
                                                                            </label>
                                                                        @endforeach
                                                                    </div>
                                                                @endfor
                                                            </div>
                                                            <div class="col-md-3">
                                                                @for ($i = count($letters_experts)/2; $i < (count($letters_experts) - count($letters_experts)/4)-1; $i++)
                                                                    <div class="fm-item">
                                                                        <p class="fm-item__letter">
                                                                            {{$letters_experts[$i]}}
                                                                        </p>
                                                                        @foreach (App\Models\ExpertTranslation::where('name', 'like', ''.$letters_experts[$i].'%')->where('locale', \App::getLocale())->get() as $agenda)
                                                                            <label class="fm-item__label">
                                                                                <input class="fm-item__checkbox input-reset"
                                                                                    type="checkbox">
                                                                                <span class="fm-item__name">
                                                                                {{$agenda->name}}
                                                                                </span>
                                                                            </label>
                                                                        @endforeach
                                                                    </div>
                                                                @endfor
                                                            </div>
                                                            <div class="col-md-3">
                                                                @for ($i = count($letters_experts) - count($letters_experts)/4; $i < count($letters_experts); $i++)
                                                                    <div class="fm-item">
                                                                        <p class="fm-item__letter">
                                                                            {{$letters_experts[$i]}}
                                                                        </p>
                                                                        @foreach (App\Models\ExpertTranslation::where('name', 'like', ''.$letters_experts[$i].'%')->where('locale', \App::getLocale())->get() as $agenda)
                                                                            <label class="fm-item__label">
                                                                                <input class="fm-item__checkbox input-reset"
                                                                                    type="checkbox">
                                                                                <span class="fm-item__name">
                                                                                {{$agenda->name}}
                                                                                </span>
                                                                            </label>
                                                                        @endforeach
                                                                    </div>
                                                                @endfor
                                                            </div>
                                                        </div>
                                                        <div class="filters__buttons">
                                                            <button class="filter-submit filtersModalClose btn-reset"
                                                                type="button" disabled>
                                                                Ok
                                                                <svg class="filter-submit__arrow" width="13" height="10"
                                                                    viewBox="0 0 13 10" fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M8.89101 0.745718L12.7416 4.40679C13.0861 4.73441 13.0861 5.26559 12.7416 5.59321L8.89101 9.25428C8.54643 9.58191 7.98776 9.58191 7.64318 9.25428C7.2986 8.92666 7.2986 8.39548 7.64318 8.06785L9.98746 5.83893H0.882353C0.395043 5.83893 0 5.46333 0 5C0 4.53667 0.395043 4.16107 0.882353 4.16107H9.98746L7.64318 1.93215C7.2986 1.60452 7.2986 1.07334 7.64318 0.745718C7.98776 0.418094 8.54643 0.418094 8.89101 0.745718Z"
                                                                        fill="white" />
                                                                </svg>
                                                            </button>
                                                            <button class="filter-submit btn-reset clearCurrentFilters"
                                                                type="button" disabled>
                                                                Clear all
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="filters__buttons filters__buttons--mob">
                                                <button class="filter-submit filtersModalClose btn-reset" type="button"
                                                    disabled>
                                                    Ok
                                                    <svg class="filter-submit__arrow" width="13" height="10"
                                                        viewBox="0 0 13 10" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.89101 0.745718L12.7416 4.40679C13.0861 4.73441 13.0861 5.26559 12.7416 5.59321L8.89101 9.25428C8.54643 9.58191 7.98776 9.58191 7.64318 9.25428C7.2986 8.92666 7.2986 8.39548 7.64318 8.06785L9.98746 5.83893H0.882353C0.395043 5.83893 0 5.46333 0 5C0 4.53667 0.395043 4.16107 0.882353 4.16107H9.98746L7.64318 1.93215C7.2986 1.60452 7.2986 1.07334 7.64318 0.745718C7.98776 0.418094 8.54643 0.418094 8.89101 0.745718Z"
                                                            fill="white" />
                                                    </svg>
                                                </button>
                                                <button class="filter-submit btn-reset clearCurrentFilters"
                                                    type="button" disabled>
                                                    Clear all
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="filters__btn btn-reset filtersBtnOpen filtersTitleKeywords"
                                        type="button">
                                        <strong class="h2 filters__btn-title" data-count="">
                                            Keywords
                                        </strong>
                                        <span class="filters__btn-text">
                                            Choose keywords
                                        </span>
                                    </button>
                                    <div class="filters-modal filtersModal modalKeywords">
                                        <div class="modal-wrap">
                                            <div class="modal__content h100">
                                                <div class="container h100">
                                                    <button class="modal__close filtersModalClose btn-reset"
                                                        type="button" aria-label="Close modal">
                                                        <svg width="20" height="10" viewBox="0 0 20 10" fill="none">
                                                            <path
                                                                d="M5.07905 10L0.319447 5.6972C-0.106483 5.31215 -0.106483 4.68785 0.319447 4.3028L5.07905 0L6.62148 1.3944L3.72375 4.01401L20 4.01401L20 5.98599L3.72375 5.98599L6.62148 8.60561L5.07905 10Z"
                                                                fill="white" />
                                                        </svg>
                                                    </button>
                                                    <div class="filters-wrap">
                                                        <h2 class="fm-title fm-title--experts filters__btn-title"
                                                            data-count="">
                                                            Keywords
                                                        </h2>
                                                        <div class="fm-row row">
                                                            <div class="col-md-2">
                                                                @for ($i = 0; $i < count($letters_tags)/6; $i++)
                                                                    <div class="fm-item">
                                                                        <p class="fm-item__letter">
                                                                            {{$letters_tags[$i]}}
                                                                        </p>
                                                                        @foreach (App\Models\TagTranslation::where('name', 'like', ''.$letters_tags[$i].'%')->where('locale', \App::getLocale())->get() as $tag)
                                                                            <label class="fm-item__label">
                                                                                <input class="fm-item__checkbox input-reset"
                                                                                    type="checkbox">
                                                                                <span class="fm-item__name">
                                                                                {{$tag->name}}
                                                                                </span>
                                                                            </label>
                                                                        @endforeach
                                                                    </div>
                                                                @endfor
                                                            </div>
                                                            <div class="col-md-2">
                                                                @for ($i = count($letters_tags)/6; $i < count($letters_tags)/3; $i++)
                                                                    <div class="fm-item">
                                                                        <p class="fm-item__letter">
                                                                            {{$letters_tags[$i]}}
                                                                        </p>
                                                                        @foreach (App\Models\TagTranslation::where('name', 'like', ''.$letters_tags[$i].'%')->where('locale', \App::getLocale())->get() as $tag)
                                                                            <label class="fm-item__label">
                                                                                <input class="fm-item__checkbox input-reset"
                                                                                    type="checkbox">
                                                                                <span class="fm-item__name">
                                                                                {{$tag->name}}
                                                                                </span>
                                                                            </label>
                                                                        @endforeach
                                                                    </div>
                                                                @endfor
                                                            </div>
                                                            <div class="col-md-2">
                                                                @for ($i = count($letters_tags)/3; $i < count($letters_tags)/2; $i++)
                                                                    <div class="fm-item">
                                                                        <p class="fm-item__letter">
                                                                            {{$letters_tags[$i]}}
                                                                        </p>
                                                                        @foreach (App\Models\TagTranslation::where('name', 'like', ''.$letters_tags[$i].'%')->where('locale', \App::getLocale())->get() as $tag)
                                                                            <label class="fm-item__label">
                                                                                <input class="fm-item__checkbox input-reset"
                                                                                    type="checkbox">
                                                                                <span class="fm-item__name">
                                                                                {{$tag->name}}
                                                                                </span>
                                                                            </label>
                                                                        @endforeach
                                                                    </div>
                                                                @endfor
                                                            </div>
                                                            <div class="col-md-2">
                                                                @for ($i = count($letters_tags)/2; $i < count($letters_tags)/2 + count($letters_tags)/6; $i++)
                                                                    <div class="fm-item">
                                                                        <p class="fm-item__letter">
                                                                            {{$letters_tags[$i]}}
                                                                        </p>
                                                                        @foreach (App\Models\TagTranslation::where('name', 'like', ''.$letters_tags[$i].'%')->where('locale', \App::getLocale())->get() as $tag)
                                                                            <label class="fm-item__label">
                                                                                <input class="fm-item__checkbox input-reset"
                                                                                    type="checkbox">
                                                                                <span class="fm-item__name">
                                                                                {{$tag->name}}
                                                                                </span>
                                                                            </label>
                                                                        @endforeach
                                                                    </div>
                                                                @endfor
                                                            </div>
                                                            <div class="col-md-2">
                                                                @for ($i = count($letters_tags)/2 + count($letters_tags)/6; $i < count($letters_tags)/3*2 + count($letters_tags)/6; $i++)
                                                                    <div class="fm-item">
                                                                        <p class="fm-item__letter">
                                                                            {{$letters_tags[$i]}}
                                                                        </p>
                                                                        @foreach (App\Models\TagTranslation::where('name', 'like', ''.$letters_tags[$i].'%')->where('locale', \App::getLocale())->get() as $tag)
                                                                            <label class="fm-item__label">
                                                                                <input class="fm-item__checkbox input-reset"
                                                                                    type="checkbox">
                                                                                <span class="fm-item__name">
                                                                                {{$tag->name}}
                                                                                </span>
                                                                            </label>
                                                                        @endforeach
                                                                    </div>
                                                                @endfor
                                                            </div>
                                                            <div class="col-md-2">
                                                                @for ($i = count($letters_tags)/3*2 + count($letters_tags)/6; $i < count($letters_tags); $i++)
                                                                    <div class="fm-item">
                                                                        <p class="fm-item__letter">
                                                                            {{$letters_tags[$i]}}
                                                                        </p>
                                                                        @foreach (App\Models\TagTranslation::where('name', 'like', ''.$letters_tags[$i].'%')->where('locale', \App::getLocale())->get() as $tag)
                                                                            <label class="fm-item__label">
                                                                                <input class="fm-item__checkbox input-reset"
                                                                                    type="checkbox">
                                                                                <span class="fm-item__name">
                                                                                {{$tag->name}}
                                                                                </span>
                                                                            </label>
                                                                        @endforeach
                                                                    </div>
                                                                @endfor
                                                            </div>
                                                        </div>
                                                        <div class="filters__buttons">
                                                            <button class="filter-submit filtersModalClose btn-reset"
                                                                type="button" disabled>
                                                                Ok
                                                                <svg class="filter-submit__arrow" width="13" height="10"
                                                                    viewBox="0 0 13 10" fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M8.89101 0.745718L12.7416 4.40679C13.0861 4.73441 13.0861 5.26559 12.7416 5.59321L8.89101 9.25428C8.54643 9.58191 7.98776 9.58191 7.64318 9.25428C7.2986 8.92666 7.2986 8.39548 7.64318 8.06785L9.98746 5.83893H0.882353C0.395043 5.83893 0 5.46333 0 5C0 4.53667 0.395043 4.16107 0.882353 4.16107H9.98746L7.64318 1.93215C7.2986 1.60452 7.2986 1.07334 7.64318 0.745718C7.98776 0.418094 8.54643 0.418094 8.89101 0.745718Z"
                                                                        fill="white" />
                                                                </svg>
                                                            </button>
                                                            <button class="filter-submit btn-reset clearCurrentFilters"
                                                                type="button" disabled>
                                                                Clear all
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="filters__buttons filters__buttons--mob">
                                                <button class="filter-submit filtersModalClose btn-reset" type="button"
                                                    disabled>
                                                    Ok
                                                    <svg class="filter-submit__arrow" width="13" height="10"
                                                        viewBox="0 0 13 10" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.89101 0.745718L12.7416 4.40679C13.0861 4.73441 13.0861 5.26559 12.7416 5.59321L8.89101 9.25428C8.54643 9.58191 7.98776 9.58191 7.64318 9.25428C7.2986 8.92666 7.2986 8.39548 7.64318 8.06785L9.98746 5.83893H0.882353C0.395043 5.83893 0 5.46333 0 5C0 4.53667 0.395043 4.16107 0.882353 4.16107H9.98746L7.64318 1.93215C7.2986 1.60452 7.2986 1.07334 7.64318 0.745718C7.98776 0.418094 8.54643 0.418094 8.89101 0.745718Z"
                                                            fill="white" />
                                                    </svg>
                                                </button>
                                                <button class="filter-submit btn-reset clearCurrentFilters"
                                                    type="button" disabled>
                                                    Clear all
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="filters__btn btn-reset filtersBtnOpen filtersTitleMaterial"
                                        type="button">
                                        <strong class="h2 filters__btn-title" data-count="">
                                            Material type
                                        </strong>
                                        <span class="filters__btn-text">
                                            Choose material type
                                        </span>
                                    </button>
                                    <div class="filters-modal filtersModal modalMaterial">
                                        <div class="modal-wrap">
                                            <div class="modal__content h100">
                                                <div class="container h100">
                                                    <button class="modal__close filtersModalClose btn-reset"
                                                        type="button" aria-label="Close modal">
                                                        <svg width="20" height="10" viewBox="0 0 20 10" fill="none">
                                                            <path
                                                                d="M5.07905 10L0.319447 5.6972C-0.106483 5.31215 -0.106483 4.68785 0.319447 4.3028L5.07905 0L6.62148 1.3944L3.72375 4.01401L20 4.01401L20 5.98599L3.72375 5.98599L6.62148 8.60561L5.07905 10Z"
                                                                fill="white" />
                                                        </svg>
                                                    </button>
                                                    <div class="filters-wrap">
                                                        <h2 class="fm-title  filters__btn-title" data-count="">
                                                            Material type
                                                        </h2>
                                                        <div class="fm-row fm-row--not row fmRowAll">
                                                            <div class="col-md-2 col-7">
                                                                <div class="fm-item">
                                                                    <p class="fm-item__letter">
                                                                        E
                                                                    </p>
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--word input-reset"
                                                                            type="checkbox">
                                                                        <span class="fm-item__name">
                                                                            Events
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item">
                                                                    <p class="fm-item__letter">
                                                                        N
                                                                    </p>
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--word input-reset"
                                                                            type="checkbox">
                                                                        <span class="fm-item__name">
                                                                            News
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item">
                                                                    <p class="fm-item__letter">
                                                                        P
                                                                    </p>
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--word input-reset"
                                                                            type="checkbox">
                                                                        <span class="fm-item__name">
                                                                            Publications
                                                                        </span>
                                                                    </label>
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--word input-reset"
                                                                            type="checkbox">
                                                                        <span class="fm-item__name">
                                                                            Projects
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fm-row fm-row--not row fmRowPublications">
                                                            <div class="col-md-2 col-7">
                                                                <div class="fm-item">
                                                                    <p class="fm-item__letter">
                                                                        A
                                                                    </p>
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--word input-reset"
                                                                            type="checkbox">
                                                                        <span class="fm-item__name">
                                                                            Analytical Report
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item">
                                                                    <p class="fm-item__letter">
                                                                        D
                                                                    </p>
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--word input-reset"
                                                                            type="checkbox">
                                                                        <span class="fm-item__name">
                                                                            Digest
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item">
                                                                    <p class="fm-item__letter">
                                                                        I
                                                                    </p>
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--word input-reset"
                                                                            type="checkbox">
                                                                        <span class="fm-item__name">
                                                                            Information Note
                                                                        </span>
                                                                    </label>

                                                                </div>
                                                                <div class="fm-item">
                                                                    <p class="fm-item__letter">
                                                                        R
                                                                    </p>
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--word input-reset"
                                                                            type="checkbox">
                                                                        <span class="fm-item__name">
                                                                            Research
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fm-row fm-row--not row fmRowMedia">
                                                            <div class="col-md-2 col-7">
                                                                <div class="fm-item">
                                                                    <p class="fm-item__letter">
                                                                        P
                                                                    </p>
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--word input-reset"
                                                                            type="checkbox">
                                                                        <span class="fm-item__name">
                                                                            Photo
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item">
                                                                    <p class="fm-item__letter">
                                                                        V
                                                                    </p>
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--word input-reset"
                                                                            type="checkbox">
                                                                        <span class="fm-item__name">
                                                                            Video
                                                                        </span>
                                                                    </label>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="filters__buttons">
                                                            <button class="filter-submit filtersModalClose btn-reset"
                                                                type="button" disabled>
                                                                Ok
                                                                <svg class="filter-submit__arrow" width="13" height="10"
                                                                    viewBox="0 0 13 10" fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M8.89101 0.745718L12.7416 4.40679C13.0861 4.73441 13.0861 5.26559 12.7416 5.59321L8.89101 9.25428C8.54643 9.58191 7.98776 9.58191 7.64318 9.25428C7.2986 8.92666 7.2986 8.39548 7.64318 8.06785L9.98746 5.83893H0.882353C0.395043 5.83893 0 5.46333 0 5C0 4.53667 0.395043 4.16107 0.882353 4.16107H9.98746L7.64318 1.93215C7.2986 1.60452 7.2986 1.07334 7.64318 0.745718C7.98776 0.418094 8.54643 0.418094 8.89101 0.745718Z"
                                                                        fill="white" />
                                                                </svg>
                                                            </button>
                                                            <button class="filter-submit btn-reset clearCurrentFilters"
                                                                type="button" disabled>
                                                                Clear all
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="filters__buttons filters__buttons--mob">
                                                <button class="filter-submit filtersModalClose btn-reset" type="button"
                                                    disabled>
                                                    Ok
                                                    <svg class="filter-submit__arrow" width="13" height="10"
                                                        viewBox="0 0 13 10" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.89101 0.745718L12.7416 4.40679C13.0861 4.73441 13.0861 5.26559 12.7416 5.59321L8.89101 9.25428C8.54643 9.58191 7.98776 9.58191 7.64318 9.25428C7.2986 8.92666 7.2986 8.39548 7.64318 8.06785L9.98746 5.83893H0.882353C0.395043 5.83893 0 5.46333 0 5C0 4.53667 0.395043 4.16107 0.882353 4.16107H9.98746L7.64318 1.93215C7.2986 1.60452 7.2986 1.07334 7.64318 0.745718C7.98776 0.418094 8.54643 0.418094 8.89101 0.745718Z"
                                                            fill="white" />
                                                    </svg>
                                                </button>
                                                <button class="filter-submit btn-reset clearCurrentFilters"
                                                    type="button" disabled>
                                                    Clear all
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <button
                                        class="filters__btn filters__btn--date btn-reset filtersBtnOpen filtersTitleDate"
                                        type="button">
                                        <strong class="h2 filters__btn-title" data-count="">
                                            Month and year
                                        </strong>
                                        <span class="filters__btn-text">
                                            Choose month and year
                                        </span>
                                    </button>
                                    <div class="filters-modal filtersModal modalDate">
                                        <div class="modal-wrap">
                                            <div class="modal__content h100">
                                                <div class="container h100">
                                                    <button class="modal__close filtersModalClose btn-reset"
                                                        type="button" aria-label="Close modal">
                                                        <svg width="20" height="10" viewBox="0 0 20 10" fill="none">
                                                            <path
                                                                d="M5.07905 10L0.319447 5.6972C-0.106483 5.31215 -0.106483 4.68785 0.319447 4.3028L5.07905 0L6.62148 1.3944L3.72375 4.01401L20 4.01401L20 5.98599L3.72375 5.98599L6.62148 8.60561L5.07905 10Z"
                                                                fill="white" />
                                                        </svg>
                                                    </button>
                                                    <div class="filters-wrap">
                                                        <h2 class="fm-title fm-title--date filters__btn-title"
                                                            data-date="">
                                                            Month and year
                                                        </h2>
                                                        <div class="fm-row row">
                                                            <div class="col-md-3">
                                                                <div class="fm-item">
                                                                    <p class="fm-item__letter ttn">
                                                                        From
                                                                    </p>
                                                                    <div class="fm-item__row">
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="from-m">
                                                                            <span class="fm-item__name">
                                                                                Jan
                                                                            </span>
                                                                        </label>
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="from-y">
                                                                            <span class="fm-item__name">
                                                                                2016
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="fm-item__row">
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="from-m">
                                                                            <span class="fm-item__name">
                                                                                Feb
                                                                            </span>
                                                                        </label>
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="from-y">
                                                                            <span class="fm-item__name">
                                                                                2017
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="fm-item__row">
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="from-m">
                                                                            <span class="fm-item__name">
                                                                                Mar
                                                                            </span>
                                                                        </label>
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="from-y">
                                                                            <span class="fm-item__name">
                                                                                2018
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="fm-item__row">
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="from-m">
                                                                            <span class="fm-item__name">
                                                                                Apr
                                                                            </span>
                                                                        </label>
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="from-y">
                                                                            <span class="fm-item__name">
                                                                                2019
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="fm-item__row">
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="from-m">
                                                                            <span class="fm-item__name">
                                                                                May
                                                                            </span>
                                                                        </label>
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="from-y">
                                                                            <span class="fm-item__name">
                                                                                2020
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="fm-item__row">
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="from-m">
                                                                            <span class="fm-item__name">
                                                                                June
                                                                            </span>
                                                                        </label>
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="from-y">
                                                                            <span class="fm-item__name">
                                                                                2021
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="fm-item__row">
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="from-m">
                                                                            <span class="fm-item__name">
                                                                                July
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="fm-item__row">
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="from-m">
                                                                            <span class="fm-item__name">
                                                                                Aug
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="fm-item__row">
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="from-m">
                                                                            <span class="fm-item__name">
                                                                                Sep
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="fm-item__row">
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="from-m">
                                                                            <span class="fm-item__name">
                                                                                Oct
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="fm-item__row">
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="from-m">
                                                                            <span class="fm-item__name">
                                                                                Nov
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="fm-item__row">
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="from-m">
                                                                            <span class="fm-item__name">
                                                                                Dec
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="fm-item">
                                                                    <p class="fm-item__letter ttn">
                                                                        From
                                                                    </p>
                                                                    <div class="fm-item__row">
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="to-m">
                                                                            <span class="fm-item__name">
                                                                                Jan
                                                                            </span>
                                                                        </label>
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="to-y">
                                                                            <span class="fm-item__name">
                                                                                2016
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="fm-item__row">
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="to-m">
                                                                            <span class="fm-item__name">
                                                                                Feb
                                                                            </span>
                                                                        </label>
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="to-y">
                                                                            <span class="fm-item__name">
                                                                                2017
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="fm-item__row">
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="to-m">
                                                                            <span class="fm-item__name">
                                                                                Mar
                                                                            </span>
                                                                        </label>
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="to-y">
                                                                            <span class="fm-item__name">
                                                                                2018
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="fm-item__row">
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="to-m">
                                                                            <span class="fm-item__name">
                                                                                Apr
                                                                            </span>
                                                                        </label>
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="to-y">
                                                                            <span class="fm-item__name">
                                                                                2019
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="fm-item__row">
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="to-m">
                                                                            <span class="fm-item__name">
                                                                                May
                                                                            </span>
                                                                        </label>
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="to-y">
                                                                            <span class="fm-item__name">
                                                                                2020
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="fm-item__row">
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="to-m">
                                                                            <span class="fm-item__name">
                                                                                June
                                                                            </span>
                                                                        </label>
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="to-y">
                                                                            <span class="fm-item__name">
                                                                                2021
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="fm-item__row">
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="to-m">
                                                                            <span class="fm-item__name">
                                                                                July
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="fm-item__row">
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="to-m">
                                                                            <span class="fm-item__name">
                                                                                Aug
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="fm-item__row">
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="to-m">
                                                                            <span class="fm-item__name">
                                                                                Sep
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="fm-item__row">
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="to-m">
                                                                            <span class="fm-item__name">
                                                                                Oct
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="fm-item__row">
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="to-m">
                                                                            <span class="fm-item__name">
                                                                                Nov
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="fm-item__row">
                                                                        <label class="fm-item__label">
                                                                            <input class="fm-item__checkbox input-reset"
                                                                                type="radio" name="to-m">
                                                                            <span class="fm-item__name">
                                                                                Dec
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="filters__buttons">
                                                            <button class="filter-submit filtersModalClose btn-reset"
                                                                type="button" disabled>
                                                                Ok
                                                                <svg class="filter-submit__arrow" width="13" height="10"
                                                                    viewBox="0 0 13 10" fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M8.89101 0.745718L12.7416 4.40679C13.0861 4.73441 13.0861 5.26559 12.7416 5.59321L8.89101 9.25428C8.54643 9.58191 7.98776 9.58191 7.64318 9.25428C7.2986 8.92666 7.2986 8.39548 7.64318 8.06785L9.98746 5.83893H0.882353C0.395043 5.83893 0 5.46333 0 5C0 4.53667 0.395043 4.16107 0.882353 4.16107H9.98746L7.64318 1.93215C7.2986 1.60452 7.2986 1.07334 7.64318 0.745718C7.98776 0.418094 8.54643 0.418094 8.89101 0.745718Z"
                                                                        fill="white" />
                                                                </svg>
                                                            </button>
                                                            <button class="filter-submit btn-reset clearCurrentFilters"
                                                                type="button" disabled>
                                                                Clear all
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="filters__buttons filters__buttons--mob">
                                                <button class="filter-submit filtersModalClose btn-reset" type="button"
                                                    disabled>
                                                    Ok
                                                    <svg class="filter-submit__arrow" width="13" height="10"
                                                        viewBox="0 0 13 10" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.89101 0.745718L12.7416 4.40679C13.0861 4.73441 13.0861 5.26559 12.7416 5.59321L8.89101 9.25428C8.54643 9.58191 7.98776 9.58191 7.64318 9.25428C7.2986 8.92666 7.2986 8.39548 7.64318 8.06785L9.98746 5.83893H0.882353C0.395043 5.83893 0 5.46333 0 5C0 4.53667 0.395043 4.16107 0.882353 4.16107H9.98746L7.64318 1.93215C7.2986 1.60452 7.2986 1.07334 7.64318 0.745718C7.98776 0.418094 8.54643 0.418094 8.89101 0.745718Z"
                                                            fill="white" />
                                                    </svg>
                                                </button>
                                                <button class="filter-submit btn-reset clearCurrentFilters"
                                                    type="button" disabled>
                                                    Clear all
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="filters__buttons filters__buttons--all">
                                    <button class="filter-submit btn-reset" type="submit">
                                        <span>Show</span> results
                                        <svg class="filter-submit__arrow" width="13" height="10" viewBox="0 0 13 10"
                                            fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.89101 0.745718L12.7416 4.40679C13.0861 4.73441 13.0861 5.26559 12.7416 5.59321L8.89101 9.25428C8.54643 9.58191 7.98776 9.58191 7.64318 9.25428C7.2986 8.92666 7.2986 8.39548 7.64318 8.06785L9.98746 5.83893H0.882353C0.395043 5.83893 0 5.46333 0 5C0 4.53667 0.395043 4.16107 0.882353 4.16107H9.98746L7.64318 1.93215C7.2986 1.60452 7.2986 1.07334 7.64318 0.745718C7.98776 0.418094 8.54643 0.418094 8.89101 0.745718Z"
                                                fill="white" />
                                        </svg>
                                        <svg class="result-clip" width="135" height="35" viewBox="0 0 135 35"
                                            fill="none">
                                            <clipPath id="result">
                                                <path
                                                    d="M8.53305 18.0874C8.53305 31.2947 3.14803 34.809 0 35L135 34.9916C131.852 34.8006 126.467 31.2863 126.467 18.079C126.467 0.583206 118.707 0 113.766 0L21.2336 0.00839996C16.2931 0.00839996 8.53305 0.591606 8.53305 18.0874Z"
                                                    fill="white" />
                                            </clipPath>
                                        </svg>
                                    </button>
                                    <button class="filter-submit clearAllFilters hide btn-reset" type="button">
                                        Clear all
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="filter-btn filter-btn--void filterBtn btn-reset" type="button">
                <span class="filter-btn__text">
                    Filters
                    <div class="filter-btn__count">

                    </div>
                </span>
                <svg width="116" height="30" viewBox="0 0 116 30" fill="none">
                    <clipPath id="clipping">
                        <path
                            d="M108.668 14.4965C108.668 3.17594 113.295 0.16373 116 0L0 0.00720042C2.70497 0.170931 7.3321 3.18314 7.3321 14.5037C7.3321 29.5001 14 30 18.2452 30L97.7548 29.9928C102 29.9928 108.668 29.4929 108.668 14.4965Z" />
                    </clipPath>
                </svg>
                <svg width="116" height="35" viewBox="0 0 116 35" fill="none">
                    <clipPath id="clipping-mob">
                        <path
                            d="M7.33209 18.0874C7.33209 31.2947 2.70496 34.809 -7.62939e-06 35L116 34.9916C113.295 34.8006 108.668 31.2863 108.668 18.079C108.668 0.583206 102 0 97.7548 0L18.2452 0.00839996C14 0.00839996 7.33209 0.591606 7.33209 18.0874Z" />
                    </clipPath>
                </svg>
            </button>
        </div>
    </form>

    @if (session('success'))
        <script>
            toastr.success('Заявка на участие подана')
        </script>
    @endif

    <script src="{{asset('templates/v2/js/scripts.min.js')}}"></script>
    <script src="{{asset('templates/v2/js/common.js')}}"></script>
</body>

</html>
