<div class="modal-menu-header NavigationList">
    <div class="modal-menu-header__body">
        <div class="container modal-menu-header__container">
            <div class="page-header__row">
                <a href="/" class="logo">
                    @if (\App::getLocale() == 'ru')
                        <img src="{{asset('templates/v2/img/logo_ru_dark.png')}}" srcset="{{asset('templates/v2/img/logo_ru_dark.png')}} 1x, {{asset('templates/v2/img/logo_ru_dark.png')}} 2x" alt="logo">
                    @else
                        <img src="{{asset('templates/v2/img/logo/logo-main-white.png')}}" srcset="{{asset('templates/v2/img/logo/logo-main-white.png')}} 1x, {{asset('templates/v2/img/logo/logo-main-white@2x.png')}} 2x" alt="logo">
                    @endif
                </a>
                <button class="hamburger HamburgerButton btn-reset NavigationListClose" type="button" aria-controls="navigation"
                        aria-expanded="false">
                    <svg width="20" height="10" viewBox="0 0 20 10" fill="none">
                        <path d="M5.07905 10L0.319447 5.6972C-0.106483 5.31215 -0.106483 4.68785 0.319447 4.3028L5.07905 0L6.62148 1.3944L3.72375 4.01401L20 4.01401L20 5.98599L3.72375 5.98599L6.62148 8.60561L5.07905 10Z" fill="white"/>
                    </svg>
                </button>
            </div>
            <div class="row modal-menu-header__row">
                <div class="modal-menu-header__title gray">
                    @lang('common.sitemap')
                </div>
                <div class="col-md-4">
                    <a href="{{route('agendas.index')}}" class="modal-menu-header--item modal-menu-header--title link-reset">@lang('common.agenda')</a>
                    @foreach ($agendas as $agenda)
                    <a href="{{route('agendas.show', $agenda->id)}}"
                        class="link-reset modal-menu-header--item">{{$agenda->name}}</a>
                    @endforeach
                    <a href="{{route('publications.index')}}"
                        class="link-reset modal-menu-header--item modal-menu-header--title">@lang('common.publications')</a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('events.index')}}"
                        class="link-reset modal-menu-header--item modal-menu-header--title">@lang('common.event')</a>
                    <a href="{{route('projects.index')}}"
                        class="link-reset modal-menu-header--item modal-menu-header--title">@lang('menu.projects')</a>
                    <a href="{{route('projects.show', 1)}}" class="link-reset modal-menu-header--item">{{\App\Models\Project::find(1)->name}}</a>
                    <a href="{{route('projects.show', 2)}}" class="link-reset modal-menu-header--item">{{\App\Models\Project::find(2)->name}}</a>
                    <a href="{{route('library.index')}}"
                        class="link-reset modal-menu-header--item modal-menu-header--title">@lang('common.library')</a>
                    <a href="{{route('news.index')}}"
                        class="link-reset modal-menu-header--item modal-menu-header--title">@lang('menu.news')</a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('pages.show', ['path' => 'about'])}}"
                        class="link-reset modal-menu-header--item modal-menu-header--title">@lang('common.aboutcenter')</a>
                    <a href="{{route('pages.show', ['path' => 'transparency'])}}" class="link-reset modal-menu-header--item">@lang('common.transparency')</a>
                    <a href="{{route('pages.show', ['path' => 'governance'])}}" class="link-reset modal-menu-header--item">@lang('menu.governance')</a>
                    <a href="{{route('pages.show', ['path' => 'people'])}}"  class="link-reset modal-menu-header--item">@lang('menu.people')</a>
                    <a href="{{route('team.index')}}"
                        class="link-reset modal-menu-header--item modal-menu-header--subitem">@lang('menu.team')</a>
                    <a href="{{route('experts.index')}}"
                        class="link-reset modal-menu-header--item modal-menu-header--subitem">@lang('common.experts-speakers')</a>
                    <a href="{{route('pages.show', ['path' => 'partners'])}}"
                        class="link-reset modal-menu-header--item">@lang('common.partners')</a>
                    <a href="{{route('pages.show', ['path' => 'clients'])}}"
                        class="link-reset modal-menu-header--item">@lang('menu.clients')</a>
                    <a class="link-reset modal-menu-header--item" href="{{route('media.index')}}">@lang('menu.mediabank')</a>
                    {!! langSwitcherForModal($app_locale, ['ru', 'en']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
