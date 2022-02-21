<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />

    <!-- Favicon -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <!-- Map CSS -->
<!-- Jquery UI datepicker -->
    <link rel="stylesheet" href="{{ asset('templates/v1/css/jquery.ui.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('templates/v1/css/jquery.ui.datepicker.css') }}" />
<!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('templates/v1/packages/barryvdh/elfinder/css/elfinder.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/v1/packages/barryvdh/elfinder/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/v1/css/theme.bundle.css')}} " />
    <link rel="stylesheet" href="{{ asset('templates/v1/css/libs.bundle.css') }}" />

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/lw2vz1at4hl1rouy8r9aw84ntanrzn6sfn8u60opvrjxelsk/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Title -->
    <title>Администрирование | ЦМСПИ</title>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
</head>
<body>

<!-- NAVIGATION -->
<nav class="navbar navbar-vertical fixed-start navbar-expand-md navbar-light" id="sidebar">
    <div class="container-fluid">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="/" target="_blank">
            <img src="{{asset('templates/v1/img/logo-color.svg')}}" class="navbar-brand-img mx-auto" alt="...">
        </a>

        <!-- User (xs) -->
        <div class="navbar-user d-md-none">

            <!-- Dropdown -->
            <div class="dropdown">

                <!-- Toggle -->
                <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
{{--                        <img src="./assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">--}}
                    </div>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarIcon">
                    <a href="./profile-posts.html" class="dropdown-item">Profile</a>
                    <a href="./account-general.html" class="dropdown-item">Settings</a>
                    <hr class="dropdown-divider">
                    <a href="./sign-in.html" class="dropdown-item">Logout</a>
                </div>

            </div>

        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">

            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#pages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="pages">
                        <i class="fe fe-file"></i> Страницы
                    </a>
                    <div class="collapse " id="pages">
                        <ul class="nav nav-sm flex-column">
                            @foreach ($staticPages as $staticPage)
                                <li class="nav-item">
                                    <a href="{{route('admin.pages.edit', $staticPage->id)}}" class="nav-link pages">
                                        {{$staticPage->translate('ru')->title}}
                                    </a>
                                </li>
                            @endforeach
                            <li class="nav-item">
                                <a href="{{ route('admin.experts.index') }}" class="nav-link experts ">
                                    Эксперты
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.teams.index')}}" class="nav-link settings ">
                                    Команда
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#publications" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="publications">
                        <i class="fe fe-file"></i> Публикации
                    </a>
                    <div class="collapse " id="publications">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('admin.publications.index')}}" class="nav-link publications ">
                                    Список
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.publication_types.index')}}" class="nav-link publication_types ">
                                    Типы публикаций
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="projects">
                        <i class="fe fe-file"></i> Проекты
                    </a>
                    <div class="collapse " id="projects">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('admin.projects.index')}}" class="nav-link projects ">
                                    Список
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.winners.index')}}" class="nav-link projects ">
                                    Победители
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.works.index')}}" class="nav-link projects ">
                                    Отмеченные работы
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#news" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="news">
                        <i class="fe fe-file"></i> Повестка
                    </a>
                    <div class="collapse " id="news">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.agendas.index') }}" class="nav-link news ">
                                    Список
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#news" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="news">
                        <i class="fe fe-file"></i> Новости
                    </a>
                    <div class="collapse " id="news">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('admin.news.index')}}" class="nav-link news ">
                                    Список
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#events" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="events">
                        <i class="fe fe-file"></i> Мероприятия
                    </a>
                    <div class="collapse " id="events">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('admin.events.index')}}" class="nav-link events ">
                                    Список
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.current-event.index')}}" class="nav-link events ">
                                    Действующее мероприятие
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.event-regs.index')}}" class="nav-link event-regs ">
                                    Регистрации
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.event_types.index')}}" class="nav-link event-regs ">
                                    Типы мероприятий
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#other" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="other">
                        <i class="fe fe-file"></i> Разное
                    </a>
                    <div class="collapse " id="other">
                        <ul class="nav nav-sm flex-column">
                           {{-- <li class="nav-item">
                               <a href="/" class="nav-link menu ">
                                   Меню
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="/" class="nav-link slider ">
                                   Слайдер
                               </a>
                           </li> --}}
                            <li class="nav-item">
                                <a href="{{ route('admin.tags.index') }}" class="nav-link tags ">
                                    Теги
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.networks.index')}}" class="nav-link slogans ">
                                    Соц Сети
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.blocks.index')}}" class="nav-link settings ">
                                    Блоки
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.mediabanks.index')}}" class="nav-link settings ">
                                    Медиабанк
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.settings.index')}}" class="nav-link settings ">
                                    Настройки
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.main-page.edit',1)}}" class="nav-link settings ">
                                    Настройки Главной
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
                <hr class="navbar-divider my-3">
            <ul class="navbar-nav">
               {{-- <li class="nav-item">
                   <a class="nav-link" href="#lawrock2020" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="lawrock2020">
                       <i class="fe fe-file"></i> Law Rock 2020
                   </a>
                   <div class="collapse " id="lawrock2020">
                       <ul class="nav nav-sm flex-column">
                           <li class="nav-item">
                               <a href="/" class="nav-link regs ">
                                   Регистрация
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="/" class="nav-link bands ">
                                   Группы
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="/" class="nav-link law-rock-news ">
                                   Новости
                               </a>
                           </li>
                       </ul>
                   </div>
               </li> --}}

                <li class="nav-item">
                    <a class="nav-link" href="#library" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="library">
                        <i class="fe fe-file"></i> Библиотека
                    </a>
                    <div class="collapse " id="library">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('admin.library-registration.index')}}" class="nav-link library-regs ">
                                    Заявки на посещение
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.books.index')}}" class="nav-link books ">
                                    Рекомендованные книги
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.library-tickets.index')}}" class="nav-link library-tickets ">
                                    Читательские билеты
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.partners.index')}}" class="nav-link library-tickets ">
                                    Партнеры
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.donators.index')}}" class="nav-link library-tickets ">
                                    Дарители
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#library" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="library">
                        <i class="fe fe-file"></i> Справочник
                    </a>
                    <div class="collapse " id="library">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('admin.languages.index')}}" class="nav-link library-regs ">
                                    Языки
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.universities.index')}}" class="nav-link books ">
                                    Университеты
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.degrees.index')}}" class="nav-link library-tickets ">
                                    Дипломы
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#emails" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="emails">
                        <i class="fe fe-file"></i> Письма
                    </a>
                    <div class="collapse " id="emails">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#emails_common" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="emails_common">
                                    Общие
                                </a>
                                <div class="collapse " id="emails_common">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="" class="nav-link on-register ">
                                                При регистрации
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/" class="nav-link payed ">
                                                Ссылка на оплату
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/" class="nav-link remind ">
                                                Напоминание об оплате
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/" class="nav-link not-registered ">
                                                При отказе в регистрации
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/" class="nav-link registered ">
                                                При подтверждении регистрации
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/" class="nav-link notify_registration ">
                                                Напоминание об участии
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/" class="nav-link confirm-after-decline ">
                                                Приглашение после отказа
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/" class="nav-link summary ">
                                                Итоги мероприятия
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/" class="nav-link send-library-ticket ">
                                                Письмо с читательским билетом
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#emails_lawrock2020" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="emails_lawrock2020">
                                    Law Rock 2020
                                </a>
                                <div class="collapse " id="emails_lawrock2020">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/" class="nav-link law-rock_register_band ">
                                                При регистрации группы
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/" class="nav-link law-rock_register_single ">
                                                При регистрации отдельного участника
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/" class="nav-link law-rock_confirm ">
                                                При подтверждении регистрации
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/" class="nav-link law-rock_decline ">
                                                При отказе
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#emails_library" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="emails_library">
                                    Письма Библиотеки
                                </a>
                                <div class="collapse " id="emails_library">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/" class="nav-link library-confirm ">
                                                Подтверждение заявки на посещение
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#emails_summer_school" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="emails_summer_school">
                                    Письма Летней Школы
                                </a>
                                <div class="collapse " id="emails_summer_school">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/" class="nav-link school-registered ">
                                                При создании заявки
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/ class="nav-link school-accepted ">
                                                При подтверждении заявки
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/" class="nav-link school-declined ">
                                                При отказе
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li> --}}
            </ul>

            <!-- Divider -->
{{--            <hr class="navbar-divider my-3">--}}

            <!-- User (md) -->
            <div class="navbar-user d-none d-md-flex" id="sidebarUser">

                <!-- Dropup -->
                <div class="dropup">

                    <!-- Toggle -->
                    <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-sm avatar-online">
                            <img src="{{ asset('templates/v1/img/avatars/profiles/avatar-1.jpg') }}" class="avatar-img rounded-circle" alt="...">
                        </div>
                    </a>

                    <!-- Menu -->
                    <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                        <a class="dropdown-item" href="/">Профиль</a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Выйти
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>

                </div>

            </div>

        </div> <!-- / .navbar-collapse -->

    </div>
</nav>

<!-- MAIN CONTENT -->
<div class="main-content">

    <!-- HEADER -->
    <div class="header">
        <div class="container-fluid">
            <!-- Body -->
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">
                        <!-- Pretitle -->
                        <h6 class="header-pretitle"></h6>
                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .header-body -->
            @include('partials.alerts')
            @yield('content')
        </div>
    </div> <!-- / .header -->
</div><!-- / .main-content -->

<!-- JAVASCRIPT -->
<!-- Map JS -->
<script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

<!-- Vendor JS -->
<script src="{{ asset('templates/v1/js/vendor.bundle.js') }}"></script>

<!-- Theme JS -->
<script src="{{ asset('templates/v1/js/theme.bundle.js') }}"></script>
<script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.7/js/jquery.fancybox.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('templates/v1/js/packages/barryvdh/elfinder/js/elfinder.min.js') }}"></script>
<script src="{{ asset('templates/v1/js/packages/barryvdh/elfinder/js/i18n/elfinder.ru.js') }}"></script>
<script src="{{ asset('templates/v1/js/back.js') }}?{{ date('Y-m-d-h-i-s') }}"></script>

<script src="{{ asset('templates/v1/js/select-pure.js') }}"></script>
<script>
    $(function() {
        $('nav#sidebar a.nav-link').click(function (){
            var divID = $(this).closest('div').attr('id');
            var item = $(this).attr('class');
            localStorage. setItem('divID', divID);
            localStorage. setItem('item', item);
        })

        $('div.collapse').removeClass('show');
        $('a.nav-link').removeClass('active');
        var divID = (localStorage.getItem('divID') == 'sidebarCollapse') ? null : localStorage.getItem('divID');
        var item = localStorage.getItem('item');

        if (divID && item) {
            item = item.replace(' ','.');
            item = item.replace('active', '');
            $('div#'+divID).addClass('show');
            $('a.'+item).addClass('active')
        }
    })
</script>
</body>
</html>
