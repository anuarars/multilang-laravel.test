<!DOCTYPE html>
<html class="page" lang="{{$app_locale}}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:image" content="path/to/image.jpg">
    @yield('meta')

    <title>@yield('meta_title', config('app.name', 'ICLRC'))</title>
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
    <script type="text/javascript" src="https://vk.com/js/api/share.js?93" charset="windows-1251"></script>
</head>

<body class="page__body">
    <header class="page-header">
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
                                stroke-linejoin="round"></path>
                            <path d="M1 1.41959L13 12.7483" stroke="white" stroke-linecap="round"
                                stroke-linejoin="round"></path>
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
        @yield('body')
    </main>

    <footer class="page-footer">
        <div class="container">
            <div class="page-footer__top page-footer__top--bottom">
                <div class="page-footer__col">
                    <strong class="gray page-footer__title">
                        @lang('common.sitemap')
                    </strong>
                    <ul class="list-reset page-footer__list">
                        <li><a href="{{route('agendas.index')}}">@lang('common.agendas')</a></li>
                        <li><a href="{{route('publications.index')}}">@lang('common.publications')</a></li>
                        <li><a href="{{route('events.index')}}">@lang('common.event')</a></li>
                        <li><a href="{{route('projects.index')}}">@lang('menu.projects')</a></li>
                        <li><a href="{{route('library.index')}}">@lang('common.library')</a></li>
                        <li><a href="{{route('news.index')}}">@lang('menu.news')</a></li>
                        <li><a href="{{route('pages.show', ['path' => 'about'])}}">@lang('common.aboutcenter')</a></li>
                    </ul>
                </div>
                <div class="page-footer__col">
                    <strong class="gray page-footer__title">
                        @lang('common.popular_tags')
                    </strong>
                    <ul class="list-reset page-footer__list">
                        @foreach ($popular_tags as $popular_tag)
                            <li>
                                <a href="#" onclick="document.getElementById('tag-{{$popular_tag->id}}').submit();">{{$popular_tag->name}}</a>
                            </li>
                            <form class="filtersForm" action="{{route('search.index')}}" method="GET" style="display: none" id="tag-{{$popular_tag->id}}">
                                <input type="hidden" name="tags[]" value="{{$popular_tag->id}}">
                            </form>
                        @endforeach
                    </ul>
                </div>
                <div class="page-footer__col">
                    <strong class="gray page-footer__title">
                        @lang('common.recommended_for_reading')
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
                        @lang('common.important_now')
                    </strong>
                    <ul class="list-reset page-footer__list">
                        @foreach ($footerEvents as $footerEvent)
                        <li>
                            <a href="{{route('events.show', $footerEvent->id)}}">
                                {{Str::words($footerEvent->title , 3)}}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="page-footer__col page-footer__mobile-top">
                    <div class="page-footer__sub-col">
                        <strong class="gray page-footer__title">
                            @lang('common.language')
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
                    </div>
                    <div class="page-footer__sub-col">
                        <strong class="gray page-footer__follow">
                            @lang('common.follow_us')
                        </strong>
                        <div class="social" role="list">
                            <a href="{{$network[0]->facebook}}" aria-label="facebook" target="_blank">
                                <svg width="26" height="29" viewBox="0 0 26 29" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M14.6547 21.7182V14.3682H16.7255L17 11.8353H14.6547L14.6582 10.5676C14.6582 9.90697 14.7223 9.55302 15.6907 9.55302H16.9853V7.0199H14.9142C12.4264 7.0199 11.5507 8.2486 11.5507 10.3149V11.8356H10V14.3684H11.5507V21.7182H14.6547Z"
                                          fill="#A9A8A8" />
                                </svg>
                            </a>
                            <a href="{{$network[0]->youtube}}" aria-label="youtube" target="_blank">
                                <svg width="26" height="29" viewBox="0 0 26 29" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M19.7074 10.7592C19.5464 10.1138 19.072 9.60566 18.4696 9.43317C17.378 9.11975 13 9.11975 13 9.11975C13 9.11975 8.62205 9.11975 7.53032 9.43317C6.92788 9.60566 6.45347 10.1138 6.29247 10.7592C6 11.9287 6 14.3691 6 14.3691C6 14.3691 6 16.8094 6.29247 17.9791C6.45347 18.6244 6.92788 19.1326 7.53032 19.3051C8.62205 19.6185 13 19.6185 13 19.6185C13 19.6185 17.378 19.6185 18.4696 19.3051C19.072 19.1326 19.5464 18.6244 19.7074 17.9791C20 16.8094 20 14.3691 20 14.3691C20 14.3691 20 11.9287 19.7074 10.7592Z"
                                          fill="#A9A8A8" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M12 16.4688V12.2693L15 14.3691L12 16.4688Z" fill="white" />
                                </svg>
                            </a>
                            <a href="{{$network[0]->instagram}}" aria-label="instagram" target="_blank">
                                <svg width="26" height="29" viewBox="0 0 26 29" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.7888 7.02198C11.9999 7.02165 12.2354 7.02198 12.5001 7.02198C14.6171 7.02198 14.868 7.02998 15.704 7.06985C16.4771 7.10699 16.8967 7.2426 17.1762 7.35656C17.5462 7.50745 17.81 7.68782 18.0873 7.9792C18.3648 8.27059 18.5367 8.54813 18.6807 8.93669C18.7892 9.22977 18.9185 9.67037 18.9537 10.4821C18.9917 11.3597 19 11.6234 19 13.8452C19 16.0671 18.9917 16.3307 18.9537 17.2084C18.9184 18.0201 18.7892 18.4607 18.6807 18.7538C18.537 19.1423 18.3648 19.419 18.0873 19.7102C17.8098 20.0016 17.5464 20.182 17.1762 20.3329C16.897 20.4473 16.4771 20.5826 15.704 20.6198C14.8682 20.6596 14.6171 20.6683 12.5001 20.6683C10.3829 20.6683 10.1319 20.6596 9.29612 20.6198C8.52305 20.5823 8.10344 20.4466 7.82383 20.3327C7.45377 20.1818 7.18945 20.0014 6.91194 19.71C6.63443 19.4186 6.46266 19.1418 6.31864 18.7531C6.21011 18.46 6.08078 18.0194 6.04559 17.2077C6.00756 16.33 6 16.0664 6 13.8431C6 11.6199 6.00756 11.3576 6.04559 10.48C6.0809 9.66828 6.21011 9.22769 6.31864 8.93422C6.46235 8.54572 6.63443 8.26819 6.91194 7.9768C7.18945 7.68541 7.45377 7.50505 7.82383 7.35376C8.10332 7.23928 8.52305 7.104 9.29612 7.06673C10.0276 7.03206 10.311 7.02165 11.7888 7.0199V7.02198ZM16.7325 8.40432C16.2072 8.40432 15.781 8.85135 15.781 9.40304C15.781 9.9546 16.2072 10.4021 16.7325 10.4021C17.2578 10.4021 17.6839 9.9546 17.6839 9.40304C17.6839 8.85148 17.2578 8.40432 16.7325 8.40432ZM12.5001 9.57163C10.2514 9.57163 8.42822 11.486 8.42822 13.8471C8.42822 16.2083 10.2514 18.1218 12.5001 18.1218C14.7488 18.1218 16.5712 16.2083 16.5712 13.8471C16.5712 11.486 14.7488 9.57163 12.5001 9.57163Z"
                                          fill="#A9A8A8" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M12.5 11.2195C13.8806 11.2195 15 12.3946 15 13.8442C15 15.2937 13.8806 16.4689 12.5 16.4689C11.1192 16.4689 10 15.2937 10 13.8442C10 12.3946 11.1192 11.2195 12.5 11.2195Z"
                                          fill="#A9A8A8" />
                                </svg>
                            </a>
                            <a href="{{$network[0]->linkedin}}" aria-label="linkedin" target="_blank">
                                <svg width="26" height="29" viewBox="0 0 26 29" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M9.17816 11.4592H6.17743V20.6681H9.17816V11.4592ZM9.37584 8.61054C9.35636 7.70761 8.72421 7.0199 7.69763 7.0199C6.67111 7.0199 6 7.70761 6 8.61054C6 9.49475 6.6513 10.2022 7.65868 10.2022H7.67788C8.72421 10.2022 9.37584 9.49475 9.37584 8.61054ZM20 15.388C20 12.5594 18.5196 11.243 16.545 11.243C14.9518 11.243 14.2385 12.1367 13.8403 12.7638V11.4595H10.8392C10.8787 12.3236 10.8392 20.6683 10.8392 20.6683H13.8403V15.5253C13.8403 15.2501 13.8597 14.9755 13.9391 14.7785C14.156 14.2286 14.6497 13.6594 15.4787 13.6594C16.565 13.6594 16.9993 14.5038 16.9993 15.7413V20.6681H19.9999L20 15.388Z"
                                          fill="#A9A8A8" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-footer__bottom">
                <div>
                    <div class="page-footer__links">
                        {!!\App\Models\Settings::where('name', 'Privacy')->first()->translate($app_locale)->content!!}
                    </div>
                    <small class="copy gray">
                        {!!\App\Models\Settings::where('name', 'Copyright')->first()->translate($app_locale)->content!!}
                    </small>
                </div>
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

    {{-- <div class="modal modalCouncil modal--council" role="dialog" aria-modal="true">
        <div class="modal__content">
            <div class="modal__body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <strong class="council-title">
                                Award Сouncil
                            </strong>
                            <ul class="council-list list-reset">
                                <li>
                                    <a href="#" class="council-btn active link-reset">
                                        Adel Abdullin
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="council-btn link-reset">
                                        Gabriela Belova-Ganeva
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="council-btn link-reset">
                                        Roman Kolodkin
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="council-btn link-reset">
                                        Sergey Marochkin
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="council-btn link-reset">
                                        Tatiana Neshataeva
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="council-btn link-reset">
                                        Sergey Punzhin
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="council-btn link-reset">
                                        Vera Rusinova
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="council-btn link-reset">
                                        Leonid Skotnikov
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="council-btn link-reset">
                                        Natalia Sokolova
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="council-btn link-reset">
                                        Bakhtiyar Tuzmukhamedov
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="council-btn link-reset">
                                        Ivana Hrdličková
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="council-btn link-reset">
                                        Vladimir Shumilov
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8">
                            <div class="pl-counsil__list">
                                <div class="pl-council">
                                    <div class="pl-council__left">
                                        <img class="pl-council__img" src="./img/plc1.png"
                                            srcset="./img/plc1.png 1x, ./img/plc1@2x.png 2x" alt="Adel Abdullin">
                                        <div class="pl-council__info">
                                            <strong class="pl-council__title">
                                                Adel Abdullin
                                            </strong>
                                            <span class="pl-counsil__rank">
                                                Doctor of Law. <br>
                                                Russia
                                            </span>
                                        </div>
                                    </div>
                                    <p class="pl-council__text">
                                        <span>
                                            Doctor of Law. Professor. Head of the Department of international and
                                            European law of Kazan Federal University
                                        </span>
                                    </p>
                                </div>
                                <div class="pl-council" hidden>
                                    <div class="pl-council__left">
                                        <img class="pl-council__img" src="./img/plc2.png"
                                            srcset="./img/plc2.png 1x, ./img/plc2@2x.png 2x"
                                            alt="Gabriela Belova-Ganeva">
                                        <div class="pl-council__info">
                                            <strong class="pl-council__title">
                                                Gabriela Belova-Ganeva
                                            </strong>
                                            <span class="pl-counsil__rank">
                                                Phd. (Law) <br>
                                                Bulgaria
                                            </span>
                                        </div>
                                    </div>
                                    <p class="pl-council__text">
                                        <span>
                                            Phd (Law). Head of the Department of Inter-national law and International
                                            relations of the South-West University „Neofit Rilsky” — Blagoevgrad.
                                            Professor. Member of the Bulgarian Association of International law and the
                                            Bulgarian association of European.
                                        </span>
                                    </p>
                                </div>
                                <div class="pl-council" hidden>
                                    <div class="pl-council__left">
                                        <img class="pl-council__img" src="./img/plc3.png"
                                            srcset="./img/plc3.png 1x, ./img/plc3@2x.png 2x" alt="Roman Kolodkin">
                                        <div class="pl-council__info">
                                            <strong class="pl-council__title">
                                                Roman Kolodkin
                                            </strong>
                                            <span class="pl-counsil__rank">
                                                Phd. (Law) <br>
                                                Russia
                                            </span>
                                        </div>
                                    </div>
                                    <p class="pl-council__text">
                                        <span>
                                            Phd. (Law). Judge of the International Tribunal for the Law of the Sea
                                            (2017…present). Ambassador Extraordinary and Plenipotentiary of the Russian
                                            Federation to the Netherlands. Permanent Represen-tative to the Organization
                                            for the Prohibition of Chemical Weapons (2009...2015). Director of the Legal
                                            Depart-ment, Ministry
                                        </span>
                                        <span>
                                            of Foreign Affairs of the Russian Federation
                                            (2001...2009, 2015...2017). Member of Institut de Droit International
                                            (2009... present). Member of International Law Commission (2003…2011,
                                            2015...2018) Director of Public International Law Studies (2017...2020).
                                            Advisor on Public Interna-tional Law (2020…present) at the ICLRC.
                                        </span>
                                    </p>
                                </div>
                                <div class="pl-council" hidden>
                                    <div class="pl-council__left">
                                        <img class="pl-council__img" src="./img/plc4.png"
                                            srcset="./img/plc4.png 1x, ./img/plc4@2x.png 2x" alt="Sergey Marochkin">
                                        <div class="pl-council__info">
                                            <strong class="pl-council__title">
                                                Sergey Marochkin
                                            </strong>
                                            <span class="pl-counsil__rank">
                                                Professor. Doctor of Law <br>
                                                Russia
                                            </span>
                                        </div>
                                    </div>
                                    <p class="pl-council__text">
                                        <span>
                                            Professor. Doctor of Law. Honored Jurist of the Russian Federation, winner
                                            (laureate) of the F.F. Martens prize of the Russian Academy of Sciences.
                                            Member of the European Society of International Law. Member of the Executive
                                            Committee of the Russian Association of International Law.
                                        </span>
                                        <span>
                                            Head of the Center for International and Comparative Legal Studies of
                                            University
                                            of Tyumen.
                                        </span>
                                    </p>
                                </div>
                                <div class="pl-council" hidden>
                                    <div class="pl-council__left">
                                        <img class="pl-council__img" src="./img/plc5.png"
                                            srcset="./img/plc5.png 1x, ./img/plc5@2x.png 2x" alt="Tatiana Neshataeva">
                                        <div class="pl-council__info">
                                            <strong class="pl-council__title">
                                                Tatiana Neshataeva
                                            </strong>
                                            <span class="pl-counsil__rank">
                                                Professor. Doctor of Law <br>
                                                Russia
                                            </span>
                                        </div>
                                    </div>
                                    <p class="pl-council__text">
                                        <span>
                                            Judge of the Court of the Eurasian Economic Union. Judge. Vice-President of
                                            the Court of the Eurasian Economic Community (2012-2014). Judge of the
                                            Supreme Commercial Court of the Russian Federation (1995-2012). Doctor of
                                            Law. Professor. Honored lawyer of the Russian Federation.
                                        </span>
                                        <span>
                                            Head of the Chair of International Law in the Russian State University of
                                            Justice. Vice-President of the Russian Association of International Law.
                                        </span>
                                    </p>
                                </div>
                                <div class="pl-council" hidden>
                                    <div class="pl-council__left">
                                        <img class="pl-council__img" src="./img/plc6.png"
                                            srcset="./img/plc6.png 1x, ./img/plc6@2x.png 2x" alt="Sergey Punzhin">
                                        <div class="pl-council__info">
                                            <strong class="pl-council__title">
                                                Sergey Punzhin
                                            </strong>
                                            <span class="pl-counsil__rank">
                                                PhD. (Law) <br>
                                                Russia
                                            </span>
                                        </div>
                                    </div>
                                    <p class="pl-council__text">
                                        <span>
                                            PhD. (Law). Principal Legal Secretary of the Court. Head of the Department
                                            of Legal Matters of International Court of Justice. Associated Member of
                                            Institut de Droit International (2020...present)
                                        </span>
                                    </p>
                                </div>
                                <div class="pl-council" hidden>
                                    <div class="pl-council__left">
                                        <img class="pl-council__img" src="./img/plc7.png"
                                            srcset="./img/plc7.png 1x, ./img/plc7@2x.png 2x" alt="Vera Rusinova">
                                        <div class="pl-council__info">
                                            <strong class="pl-council__title">
                                                Vera Rusinova
                                            </strong>
                                            <span class="pl-counsil__rank">
                                                Professor. Dr. hab. <br>
                                                Russia
                                            </span>
                                        </div>
                                    </div>
                                    <p class="pl-council__text">
                                        <span>
                                            Professor of International Law at the National Research University at Higher
                                            School of Economics in Moscow. Received a Doctor of legal sciences (Dr.
                                            hab.) degree in Moscow and holds a Master degree from the University of
                                            Göttingen. A Co-Chair of the International Law Association’s Committee on
                                            Use of Force.
                                        </span>
                                        <span>
                                            A Member of the European Society of International Law, and the Russian
                                            Association of International Law.
                                        </span>
                                    </p>
                                </div>
                                <div class="pl-council" hidden>
                                    <div class="pl-council__left">
                                        <img class="pl-council__img" src="./img/plc8.png"
                                            srcset="./img/plc8.png 1x, ./img/plc8@2x.png 2x" alt="Leonid Skotnikov">
                                        <div class="pl-council__info">
                                            <strong class="pl-council__title">
                                                Leonid Skotnikov
                                            </strong>
                                            <span class="pl-counsil__rank">
                                                Jurist <br>
                                                Russia
                                            </span>
                                        </div>
                                    </div>
                                    <p class="pl-council__text">
                                        <span>
                                            Member of the International Court of Justice (2006...2015). Permanent
                                            Representative of the Russian Federation to the United Nations and other
                                            Interna-tional Organizations in Geneva and to the Conference on Disarmament
                                            (2001...2005). Director of the Legal Department.
                                        </span>
                                        <span>
                                            Ministry of Foreign Affairs of the Russian Federation (1991...1992,
                                            1998...2001).
                                            Ambassador Extraordinary and Plenipotentiary of the Russian Federation to
                                            the Netherlands (1992...1998)
                                        </span>
                                    </p>
                                </div>
                                <div class="pl-council" hidden>
                                    <div class="pl-council__left">
                                        <img class="pl-council__img" src="./img/plc9.png"
                                            srcset="./img/plc9.png 1x, ./img/plc9@2x.png 2x" alt="Natalia Sokolova">
                                        <div class="pl-council__info">
                                            <strong class="pl-council__title">
                                                Natalia Sokolova
                                            </strong>
                                            <span class="pl-counsil__rank">
                                                Doctor of Law <br>
                                                Russia
                                            </span>
                                        </div>
                                    </div>
                                    <p class="pl-council__text">
                                        <span>
                                            Phd. (Law). Judge. President of the Special Tribunal for Lebanon
                                        </span>
                                    </p>
                                </div>
                                <div class="pl-council" hidden>
                                    <div class="pl-council__left">
                                        <img class="pl-council__img" src="./img/plc10.png"
                                            srcset="./img/plc10.png 1x, ./img/plc10@2x.png 2x"
                                            alt="Bakhtiyar Tuzmukhamedov">
                                        <div class="pl-council__info">
                                            <strong class="pl-council__title">
                                                Bakhtiyar Tuzmukhamedov
                                            </strong>
                                            <span class="pl-counsil__rank">
                                                Professor <br>
                                                Russia
                                            </span>
                                        </div>
                                    </div>
                                    <p class="pl-council__text">
                                        <span>
                                            Professor of International Law. Merited Jurist of the Russian Federation.
                                            Vice-President of the Russian Association of International Law. Member of
                                            the Committee against Torture. Ad hoc Judge of the European Court of Human
                                            Rights (Ukraine v. Russia). Senior staff member of
                                        </span>
                                        <span>
                                            the Secretariat of the Constitutional Court of the Russian Federation
                                            (1992...2016). Trial Judge, the UN International Criminal Tribunal for
                                            Rwanda (2009...2012). Appeals Judge, the UN International Criminal Tribunals
                                            for Rwanda and for the former Yugoslavia (2012...2015)
                                        </span>
                                    </p>
                                </div>
                                <div class="pl-council" hidden>
                                    <div class="pl-council__left">
                                        <img class="pl-council__img" src="./img/plc11.png"
                                            srcset="./img/plc11.png 1x, ./img/plc11@2x.png 2x" alt="Ivana Hrdličková">
                                        <div class="pl-council__info">
                                            <strong class="pl-council__title">
                                                Ivana Hrdličková
                                            </strong>
                                            <span class="pl-counsil__rank">
                                                Phd. (Law)<br>
                                                Russia
                                            </span>
                                        </div>
                                    </div>
                                    <p class="pl-council__text">
                                        <span>
                                            Professor of International Law. Merited Jurist of the Russian Federation.
                                            Vice-President of the Russian Association of International Law. Member of
                                            the Committee against Torture. Ad hoc Judge of the European Court of Human
                                            Rights (Ukraine v. Russia). Senior staff member of
                                        </span>
                                        <span>
                                            the Secretariat of the Constitutional Court of the Russian Federation
                                            (1992...2016). Trial Judge, the UN International Criminal Tribunal for
                                            Rwanda (2009...2012). Appeals Judge, the UN International Criminal Tribunals
                                            for Rwanda and for the former Yugoslavia (2012...2015)
                                        </span>
                                    </p>
                                </div>
                                <div class="pl-council" hidden>
                                    <div class="pl-council__left">
                                        <img class="pl-council__img" src="./img/plc12.png"
                                            srcset="./img/plc12.png 1x, ./img/plc12@2x.png 2x" alt="Ivana Hrdličková">
                                        <div class="pl-council__info">
                                            <strong class="pl-council__title">
                                                Vladimir Shumilov
                                            </strong>
                                            <span class="pl-counsil__rank">
                                                Professor. Doctor of Law<br>
                                                Russia
                                            </span>
                                        </div>
                                    </div>
                                    <p class="pl-council__text">
                                        <span>
                                            Head of the Department of International Law at the Russian Foreign Trade
                                            Academy, Doctor of Law, Professor, Honored Jurist of the Russian Federation
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="pagination council-pagination councilPagination">
                                <div class="pagination__row">
                                    <ul class="pagination__list list-reset">
                                        <li>
                                            <a href="#" class="disabled">1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="disabled">…</a>
                                        </li>
                                        <li>
                                            <a href="#">10</a>
                                        </li>
                                    </ul>
                                    <div class="pagination__btns">
                                        <button class="btn-reset" type="button" disabled>
                                            <svg width="19" height="16" viewBox="0 0 19 16" fill="none">
                                                <path
                                                    d="M18 9C18.5523 9 19 8.55228 19 8C19 7.44772 18.5523 7 18 7V9ZM0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM18 7L1 7V9L18 9V7Z"
                                                    fill="var(--black)" />
                                            </svg>
                                        </button>
                                        <button class="btn-reset" type="button">
                                            <svg width="19" height="16" viewBox="0 0 19 16" fill="none">
                                                <path
                                                    d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM18.7071 8.70711C19.0976 8.31658 19.0976 7.68342 18.7071 7.29289L12.3431 0.928932C11.9526 0.538408 11.3195 0.538408 10.9289 0.928932C10.5384 1.31946 10.5384 1.95262 10.9289 2.34315L16.5858 8L10.9289 13.6569C10.5384 14.0474 10.5384 14.6805 10.9289 15.0711C11.3195 15.4616 11.9526 15.4616 12.3431 15.0711L18.7071 8.70711ZM1 9H18V7H1V9Z"
                                                    fill="var(--black)" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="pagination__progress" style="--progress: 10%">
                                    <div class="pagination__progress-bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal__container container">
            <button class="modal__close modalClose btn-reset" type="button" aria-label="Close modal">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M18 6L6 18" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M6 6L18 18" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div> --}}

    @include('includes.modal-filter')



    @if (session('success'))
    <script>
        toastr.success('Заявка на участие подана')

    </script>
    @endif

    <script src="{{asset('templates/v2/js/scripts.min.js')}}"></script>
    <script src="{{asset('templates/v2/js/common.js')}}"></script>
</body>

</html>
