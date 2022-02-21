<ul class="menu__list list-reset">
    <li><a href="{{route('agendas.index')}}" class="{{ request()->is(''.$app_locale.'/agendas') ? 'current' : ''}}">Повестка</a></li>
    <li><a href="{{route('publications.index')}}" class="{{ request()->is(''.$app_locale.'/publications') ? 'current' : ''}}">Публикации</a></li>
    <li><a href="{{route('events.index')}}" class="{{ request()->is(''.$app_locale.'/events') ? 'current' : ''}}">Мероприятия</a></li>
    <li><a href="{{route('projects.index')}}" class="{{ request()->is(''.$app_locale.'/projects') ? 'current' : ''}}">Проекты</a></li>
    <li><a href="{{route('library.index')}}" class="{{ request()->is(''.$app_locale.'/library') ? 'current' : ''}}">Библиотека</a></li>
    <li><a href="{{route('news.index')}}" class="{{ request()->is(''.$app_locale.'/news') ? 'current' : ''}}">Новости</a></li>
    <li><a href="{{route('pages.show', ['path' => 'about'])}}" class="{{ request()->is(''.$app_locale.'/about') ? 'current' : ''}}">О Центре</a></li>
</ul>





{{-- <nav class="menu NavigationList" id="navigation">
    <button type="button" class="menu__close btn-reset">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
            <path d="M13 1.41959L1 12.7483" stroke="white" stroke-linecap="round"
                stroke-linejoin="round" />
            <path d="M1 1.41959L13 12.7483" stroke="white" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
    </button>
    <ul class="menu__list list-reset">
        <li><a href="#" class="{{ request()->is(''.$app_locale.'/agenda') ? 'current' : ''}}">Agenda</a></li>
        <li><a href="#" class="{{ request()->is(''.$app_locale.'/publications') ? 'current' : ''}}">Публикации</a></li>
        <li><a href="#" class="{{ request()->is(''.$app_locale.'/events') ? 'current' : ''}}">Мероприятия</a></li>
        <li><a href="#" class="{{ request()->is(''.$app_locale.'/projects') ? 'current' : ''}}">Проекты</a></li>
        <li><a href="#" class="{{ request()->is(''.$app_locale.'/library') ? 'current' : ''}}">Библиотека</a></li>
        <li><a href="#" class="{{ request()->is(''.$app_locale.'/news') ? 'current' : ''}}">Новости</a></li>
        <li><a href="#" class="{{ request()->is(''.$app_locale.'/about') ? 'current' : ''}}">О нас</a></li>
        <a href="#" class="old-site open h4 link-reset" target="_blank">
            <svg width="13" height="9" viewBox="0 0 13 9" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M8.89101 0.245718L12.7416 3.90679C13.0861 4.23441 13.0861 4.76559 12.7416 5.09321L8.89101 8.75428C8.54643 9.08191 7.98776 9.08191 7.64318 8.75428C7.2986 8.42666 7.2986 7.89548 7.64318 7.56785L9.98746 5.33893H0.882353C0.395043 5.33893 0 4.96333 0 4.5C0 4.03667 0.395043 3.66107 0.882353 3.66107H9.98746L7.64318 1.43215C7.2986 1.10452 7.2986 0.573341 7.64318 0.245718C7.98776 -0.0819059 8.54643 -0.0819059 8.89101 0.245718Z"
                    fill="white" />
            </svg>
            <span>Old website</span>
        </a>
    </ul>
</nav> --}}