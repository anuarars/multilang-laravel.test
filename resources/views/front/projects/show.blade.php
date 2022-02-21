@extends('layouts.app')

@section('meta_title')
{{$project->name}}
@endsection

@section('body')
<section class="projects-law pb200">
    <div class="container">
        <ul class="breadcrumbs list-reset">
            <li>
                <a href="{{route('projects.index')}}">@lang('menu.projects')</a>
            </li>
            <li>
                {{$project->name}}
            </li>
        </ul>
        <div class="row projects-law__row">
            <div class="col-md-8">
                <p class="research__text serif-big">
                    {!!$project->description!!}
                </p>
            </div>
            <div class="col-md-4">
                <aside class="projects-law__aside">
                    <h1 class="h2 projects-law__title">
                        {{$project->name}}
                    </h1>
                    <div class="pl-top">
                        <picture>
                            <source src="{{$project->logo}}">
                            <img src="{{$project->logo}}" srcset="{{$project->logo}}" alt="{{$project->logo}}"
                                class="pl-top__image">
                        </picture>
                        <p class="pl-top__text">
                            {{$project->name}}
                        </p>
                    </div>
                    @if ($project->award)
                    <div class="pl-item">
                        <span class="pl-item__title gray">
                            Prize
                        </span>
                        <p class="pl-item__text pl-item__text--prize">
                            {{$project->award}}
                        </p>
                    </div>
                    @endif
                    <div class="pl-item">
                        <span class="pl-item__title gray">
                            @lang('sidebar.date_accept')
                        </span>
                        <p class="pl-item__text">
                            @if (\App::getLocale() == 'ru')
                            {{ Date::parse(explode('-', $project->datetimes)[0])->locale(\App::getLocale())->format('d M Y') }}
                            @else
                            {{ Date::parse(explode('-', $project->datetimes)[0])->locale(\App::getLocale())->format('M d, Y') }}
                            @endif
                            …
                            @if (\App::getLocale() == 'ru')
                            {{ Date::parse(explode('-', $project->datetimes)[1])->locale(\App::getLocale())->format('d M Y') }}
                            @else
                            {{ Date::parse(explode('-', $project->datetimes)[1])->locale(\App::getLocale())->format('M d, Y') }}
                            @endif
                        </p>
                    </div>
                    <div class="pl-item">
                        <span class="pl-item__title gray">
                            @lang('projects.announcement_competiton')
                        </span>
                        <p class="pl-item__text">
                            @if (\App::getLocale() == 'ru')
                            {{ Date::parse($project->announcement_competition)->locale(\App::getLocale())->format('d M Y') }}
                            @else
                            {{ Date::parse($project->announcement_competition)->locale(\App::getLocale())->format('M d, Y') }}
                            @endif
                        </p>
                    </div>
                    <div class="pl-item">
                        <span class="pl-item__title gray">
                            @lang('projects.announcement_results')
                        </span>
                        <p class="pl-item__text">
                            @lang('projects.no_later') <br>
                            @if (\App::getLocale() == 'ru')
                            {{ Date::parse($project->announcement_result)->locale(\App::getLocale())->format('d M Y') }}
                            @else
                            {{ Date::parse($project->announcement_result)->locale(\App::getLocale())->format('M d, Y') }}
                            @endif
                        </p>
                    </div>
                    <div class="pl-item">
                        <span class="pl-item__title gray">
                            @lang('sidebar.se')
                        </span>
                        <button class="more-link btn-reset openModalCouncil">
                            @lang('sidebar.members')
                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                                <g opacity="0.5">
                                    <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </button>
                    </div>
                    <div class="pl-item">
                        <span class="pl-item__title gray">
                            Type
                        </span>
                        <p class="pl-item__text">
                            Award
                        </p>
                    </div>

                    <div class="pl-item pl-item--social">
                        <span class="pl-item__title gray">
                            Award contacts
                        </span>
                        <div class="pl-item__group">
                            {!!$project->contacts!!}
                        </div>
                    </div>
                    <button class="btn btn--black law__btn btn-reset openModalApplication" type="button">
                        <span>
                            @lang('projects.btn_award')
                        </span>
                        <svg width="13" height="10" viewBox="0 0 13 10" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.89101 0.745718L12.7416 4.40679C13.0861 4.73441 13.0861 5.26559 12.7416 5.59321L8.89101 9.25428C8.54643 9.58191 7.98776 9.58191 7.64318 9.25428C7.2986 8.92666 7.2986 8.39548 7.64318 8.06785L9.98746 5.83893H0.882353C0.395043 5.83893 0 5.46333 0 5C0 4.53667 0.395043 4.16107 0.882353 4.16107H9.98746L7.64318 1.93215C7.2986 1.60452 7.2986 1.07334 7.64318 0.745718C7.98776 0.418094 8.54643 0.418094 8.89101 0.745718Z"
                                fill="white" />
                        </svg>
                    </button>
                </aside>
            </div>
        </div>

        <h3 class="pw-title">
            Prize winners
        </h3>
        <div class="row pw-row">
            @foreach ($winners as $winner)
            <div class="col-md-4 pw-col">
                <article class="winner">
                    <div class="winner__link">
                        <div class="winner__img">
                            <img src="{{$winner->image}}" alt="{{$winner->image}}">
                        </div>
                        <div class="winner__info">
                            <strong class="winner__title">
                                <span class="winner__top">
                                    {{$winner->name}}
                                </span>
                            </strong>
                            <span class="winner__year gray">
                                {{$winner->year}}
                            </span>
                            <button class="more-link playWinnerVideo btn-reset">
                                View video with Vladimir
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <g opacity="0.5">
                                        <path d="M1.98261 10.0178L9.05371 2.94678" stroke="#A9A8A8" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M5.01807 1.9823H10.0181V6.9823" stroke="#A9A8A8" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="winner__video">
                        <div class="video winnerVideo LazyVideoYt" data-id="{{substr($winner->video, 32)}}"
                            data-alt="Vladimir Trofimchuk"
                            data-params="modestbranding=1&showinfo=0&controls=1&vq=hd720&autoplay=1" tabindex="0">
                            <div class="video__btn"></div>
                        </div>
                    </div>
                    <p class="winner__text">
                        {!!substr($winner->short_description, 0, 200)!!}
                    </p>
                    <div class="winner__article">
                        <span class="winner__article-title gray">
                            Award winning paper
                        </span>
                        <a href="{{$winner->link}}" class="more-link more-link--text link-reset" target="_blank">
                            {{$winner->short_description}}
                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                                <g opacity="0.5">
                                    <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
        @if (count($works) > 0)
        <h3 class="pf-title">
            Outstanding works
        </h3>
        <div class="row pf-row">
            @foreach ($works as $work)
            <div class="col-md-3 pf-col">
                <a href="#" class="pf-item link-reset">
                    <span class="pf-item__top gray">
                        {{$work->name}} <br>
                        {{$work->year}}
                    </span>
                    <p class="pf-item__text">
                        {{$work->description}}
                    </p>
                </a>
            </div>
            @endforeach
        </div>
        @endif
        @if (count($partners) > 0)
        <h3 class="pp-title">
            @lang('common.partners')
        </h3>
        <div class="row">
            @foreach ($partners as $partner)
            <div class="col-md-3">
                <a href="#" class="partner link-reset" style="width: 100%">
                    <div class="partner__top">
                        <img class="partner__img" src="{{$partner->image}}" alt="{{$partner->image}}">
                        <img class="partner__img-hover" src="{{$partner->image}}" alt="{{$partner->image}}">
                    </div>
                    <p class="partner__name">
                        {{$partner->name}}
                    </p>
                    <span class="partner__country gray">
                        {{$partner->country}}
                    </span>
                </a>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>

<div class="modal modalApplication" role="dialog" aria-modal="true">
    <div class="modal__content">

        <div class="modal__body">
            <div class="container">
                <div class="modal__top">
                    <h3 class="modal__title">
                        Application for participation
                    </h3>
                    <button type="button" class="modalClose btn-reset modal__arrow" aria-label="Close modal">
                        <svg width="20" height="10" viewBox="0 0 20 10" fill="none">
                            <path
                                d="M5.07905 10L0.319447 5.6972C-0.106483 5.31215 -0.106483 4.68785 0.319447 4.3028L5.07905 0L6.62148 1.3944L3.72375 4.01401L20 4.01401L20 5.98599L3.72375 5.98599L6.62148 8.60561L5.07905 10Z"
                                fill="white" />
                        </svg>
                    </button>
                </div>
                <p class="modal__text">
                    @lang('projects.form.about_award')
                </p>
                <form class="" action="#">
                    <div class="modal__grid">
                        <div class="modal-input">
                            <label class="modal-input__label">
                                <input class="modal-input__field input-reset" type="text" placeholder="@lang('projects.form.name')">
                                <span class="modal-input__placeholder">@lang('projects.form.name')</span>
                            </label>
                        </div>
                        <div class="modal-input">
                            <label class="modal-input__label">
                                <input class="modal-input__field input-reset" type="text" placeholder="Patronymic">
                                <span class="modal-input__placeholder">Patronymic</span>
                            </label>
                        </div>
                        <div class="modal-input">
                            <label class="modal-input__label">
                                <input class="modal-input__field input-reset" type="text" placeholder="@lang('projects.form.surname')">
                                <span class="modal-input__placeholder">@lang('projects.form.surname')</span>
                            </label>
                        </div>
                        <div class="modal-input">
                            <label class="modal-input__label">
                                <input class="modal-input__field input-reset" type="text" placeholder="@lang('projects.form.age')">
                                <span class="modal-input__placeholder">@lang('projects.form.age')</span>
                            </label>
                        </div>
                        <div class="modal-input">
                            <label class="modal-input__label">
                                <input class="modal-input__field input-reset" type="text" placeholder="@lang('projects.form.citizenship')">
                                <span class="modal-input__placeholder">@lang('projects.form.citizenship')</span>
                            </label>
                        </div>
                        <div class="modal-input">
                            <label class="modal-input__label">
                                <input class="modal-input__field input-reset" type="tel" placeholder="@lang('projects.form.phone')">
                                <span class="modal-input__placeholder">@lang('projects.form.phone')</span>
                            </label>
                        </div>
                        <div class="modal-input invalid">
                            <label class="modal-input__label">
                                <input class="modal-input__field input-reset" type="email" placeholder="@lang('projects.form.email')"
                                    value="mikhailov">
                                <span class="modal-input__placeholder">@lang('projects.form.email')</span>
                            </label>
                        </div>

                        <div class="modal-input">
                            <label class="modal-input__label">
                                <input class="modal-input__field input-reset" type="text" placeholder="@lang('projects.form.degree')">
                                <span class="modal-input__placeholder">@lang('projects.form.degree')</span>
                            </label>
                        </div>
                        <div class="modal-input">
                            <label class="modal-input__label">
                                <input class="modal-input__field input-reset" type="text" placeholder="@lang('projects.form.name_university')">
                                <span class="modal-input__placeholder">@lang('projects.form.name_university')</span>
                            </label>
                        </div>
                        <div class="modal-input modal-input--full">
                            <label class="modal-input__label">
                                <input class="modal-input__field input-reset" type="text" placeholder="@lang('projects.form.name_competition')">
                                <span class="modal-input__placeholder">@lang('projects.form.name_competition')</span>
                            </label>
                        </div>
                    </div>
                    <div class="modal__files">
                        <label class="modal-file">
                            <span class="modal-file__name gray">
                                @lang('projects.form.passport')
                            </span>
                            <p class="modal-file__text">
                                PDF / JPG / JPEG / TIFF
                            </p>
                            <input class="modal-file__input" type="file">
                        </label>
                        <label class="modal-file">
                            <span class="modal-file__name gray">
                                @lang('projects.form.competition_paper')
                            </span>
                            <p class="modal-file__text">
                                DOC
                            </p>
                            <input class="modal-file__input" type="file">
                        </label>
                        <label class="modal-file">
                            <span class="modal-file__name gray">
                                @lang('projects.form.cover_letter')
                            </span>
                            <p class="modal-file__text">
                                Cl_Mikhailov.pdf
                            </p>
                            <input class="modal-file__input" type="file">
                        </label>
                        <label class="modal-file invalid">
                            <span class="modal-file__name gray">
                                @lang('projects.form.doc_law')
                            </span>
                            <p class="modal-file__text">
                                PDF / JPG / JPEG / TIFF
                            </p>
                            <div class="modal-file__error">

                                <svg height="18" width="18">
                                    <image height="18" width="18" href="{{asset('templates/v2/img/danger.svg')}}">
                                    </image>
                                </svg>

                                Uplode file less than 2.5 Mb
                            </div>
                            <input class="modal-file__input" type="file">
                        </label>
                        <div class="modal-radio">
                            <span class="modal-file__name gray">
                                @lang('projects.form.competition_paper_published')
                            </span>
                            <div class="inputs-radio">
                                <label class="input-radio">
                                    <input class="input-reset" type="radio" name="published">
                                    <span>@lang('camp.yes')</span>
                                </label>
                                <label class="input-radio">
                                    <input class="input-reset" type="radio" name="published">
                                    <span>@lang('camp.no')</span>
                                </label>
                            </div>

                        </div>
                        <label class="modal-file disabled">
                            <span class="modal-file__name gray">
                                @lang('projects.form.scan_copy_publication')
                            </span>
                            <p class="modal-file__text">
                                PDF / JPG / JPEG / TIFF
                            </p>
                            <div class="modal-file__error">

                                <svg height="18" width="18">
                                    <image height="18" width="18" href="{{asset('templates/v2/img/danger.svg')}}">
                                    </image>
                                </svg>

                                Uplode file less than 2.5 Mb
                            </div>
                            <input class="modal-file__input" type="file">
                        </label>
                    </div>
                    <div class="modal__bottom">
                        <div class="modal__personal">
                            <label class="modal__checkbox">
                                <input type="checkbox" class="input-reset">
                            </label>
                            <a href="#" class="link-reset">
                                @lang('projects.form.personal_data')
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                                    <g opacity="0.5">
                                        <path d="M1.92893 9.07107L9 2" stroke="#A9A8A8" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                </svg>
                            </a>

                        </div>
                        <button type="button" class="modal__submit btn-reset" disabled>
                            @lang('projects.form.btn_award')
                            <svg width="13" height="10" viewBox="0 0 13 10" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.89101 0.745718L12.7416 4.40679C13.0861 4.73441 13.0861 5.26559 12.7416 5.59321L8.89101 9.25428C8.54643 9.58191 7.98776 9.58191 7.64318 9.25428C7.2986 8.92666 7.2986 8.39548 7.64318 8.06785L9.98746 5.83893H0.882353C0.395043 5.83893 0 5.46333 0 5C0 4.53667 0.395043 4.16107 0.882353 4.16107H9.98746L7.64318 1.93215C7.2986 1.60452 7.2986 1.07334 7.64318 0.745718C7.98776 0.418094 8.54643 0.418094 8.89101 0.745718Z"
                                    fill="white" />
                            </svg>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>



<div class="modal modalCouncil modal--council" role="dialog" aria-modal="true">
    <div class="modal__content">
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
        <div class="modal__body">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <strong class="council-title">
                            @lang('sidebar.se')
                        </strong>
                        <ul class="council-list list-reset">
                            @foreach ($project->experts as $expert)
                                <li>
                                    <a href="{{route('experts.show', $expert->id)}}" class="council-btn link-reset" data-id="{{$expert->id}}">
                                        {{$expert->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <div class="pl-counsil__list">
                            @foreach ($project->experts as $expert)
                                <div class="pl-council" data-id="{{$expert->id}}" hidden>
                                    <div class="pl-council__left">
                                        <img class="pl-council__img" src="{{$expert->image ?? "https://iclrc-v2.uprising.agency/templates/v2/img/ex1.jpg"}}" alt="{{$expert->image}}">
                                        <div class="pl-council__info">
                                            <strong class="pl-council__title">
                                                {{$expert->name}}
                                            </strong>
                                            <span class="pl-counsil__rank">
                                                {{$expert->jobTitle}}<br>
                                                {{$expert->country}}
                                            </span>
                                        </div>
                                    </div>
                                    <p class="pl-council__text">
                                        <span>
                                            {{$expert->description}}
                                        </span>
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
