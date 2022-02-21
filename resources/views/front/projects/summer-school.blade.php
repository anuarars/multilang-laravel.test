@extends('layouts.app')

@section('body')
<section class="projects-law projects-school pb200">
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
                {!!$project->description!!}
                @if (count($experts) > 0)
                    <div class="pse">
                        <h3 class="pse__title">
                            Program and Experts 2022
                        </h3>
                        <div class="pse__grid">
                            @foreach ($experts as $expert)
                                <div class="pse-item">
                                    <button type="button" class="pse-item__title openModalCouncil2 btn-reset">
                                        {{$expert->name}}
                                        <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.46064 0.301161L9.77216 0.167174C10.2475 0.155184 10.6231 0.530787 10.6111 1.00611L10.4771 6.31763C10.4651 6.79295 10.0701 7.18799 9.59475 7.19998C9.11944 7.21197 8.74383 6.83636 8.75582 6.36105L8.8374 3.1273L2.39911 9.56558C2.05453 9.91016 1.5096 9.92391 1.18198 9.59629C0.854357 9.26866 0.868103 8.72374 1.21268 8.37915L7.65097 1.94087L4.41722 2.02245C3.9419 2.03444 3.5663 1.65883 3.57829 1.18351C3.59028 0.708194 3.98532 0.313151 4.46064 0.301161Z"
                                                fill="#A9A8A8" />
                                        </svg>
                                    </button>
                                    <div class="pse-item__info">
                                        General course
                                    </div>
                                    <p class="pse-item__text">
                                        {{$expert->jobTitle}}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
                {!!$project->terms!!}
                {!!$project->scholarship!!}
            </div>
            <div class="col-md-4">
                <aside class="projects-law__aside">
                    <h1 class="h2 projects-law__title">
                        {{$project->name}}
                    </h1>
                    <div class="pl-top">
                        <div class="ps-logo">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <p class="pl-top__text">
                            {{$project->name}}
                        </p>
                    </div>
                    <div class="pl-item">
                        <span class="pl-item__title gray">
                            @lang('sidebar.date')
                        </span>
                        <p class="pl-item__text">
                            @if (Date::parse($project->date_start)->format('H:i') == '00:00' &&
                            Date::parse($project->date_end)->format('H:i') == '00:00' || Date::parse($project->date_start)->format('H:i')==Date::parse($project->date_end)->format('H:i'))
                                @if (\App::getLocale() == 'ru')
                                    {{ Date::parse($project->date_start)->locale(\App::getLocale())->format('d F Y') }}
                                @else
                                    {{ Date::parse($project->date_start)->locale(\App::getLocale())->format('M d, Y') }}
                                @endif
                            @else
                                @if (\App::getLocale() == 'ru')
                                    {{ Date::parse($project->date_start)->locale(\App::getLocale())->format('d F Y') }}
                                    {{ Date::parse($project->date_start)->format('H:i') }}...{{ Date::parse($project->date_end)->format('H:i') }}
                                @else
                                    {{ Date::parse($project->date_start)->locale(\App::getLocale())->format('M d, Y') }}
                                    {{ Date::parse($project->date_start)->format('H:i') }}...{{ Date::parse($project->date_end)->format('H:i') }}
                                @endif
                            @endif
                        </p>
                    </div>
                    <div class="pl-item">
                        <span class="pl-item__title gray">
                            @lang('sidebar.date_accept')
                        </span>
                        <p class="pl-item__text">
                            @lang('sidebar.no_later') <br>
                            @if (\App::getLocale() == 'ru')
                                {{ Date::parse($project->announcement_competition)->locale(\App::getLocale())->format('d F Y') }}
                            @else
                                {{ Date::parse($project->announcement_competition)->locale(\App::getLocale())->format('M d, Y') }}
                            @endif
                        </p>
                    </div>
                    <div class="pl-item">
                        <span class="pl-item__title gray">
                            @lang('sidebar.publishing')
                        </span>
                        <p class="pl-item__text">
                            @lang('sidebar.no_later')<br>
                            @if (\App::getLocale() == 'ru')
                                {{ Date::parse($project->announcement_result)->locale(\App::getLocale())->format('d F Y') }}
                            @else
                                {{ Date::parse($project->announcement_result)->locale(\App::getLocale())->format('M d, Y') }}
                            @endif
                        </p>
                    </div>
                    <div class="pl-item">
                        <span class="pl-item__title gray">
                            @lang('sidebar.schedule')
                        </span>
                        {!!$project->schedule!!}
                    </div>
                    @if ($project->fee)
                        <div class="pl-item">
                            <span class="pl-item__title gray">
                                @lang('sidebar.fee')
                            </span>
                            <p class="pl-item__text">
                                {{$project->fee}}
                            </p>
                        </div>
                    @endif
                    @if (count($project->team) > 0)
                        <div class="pl-item">
                            <span class="pl-item__title gray">
                                @lang('sidebar.administration')
                            </span>
                            <div>
                                @foreach ($project->team as $admin)
                                    <div class="research__col research__col--user" tabindex="0">
                                        <p class="research__name m0">
                                            {{$admin->name}}
                                        </p>
                                        <div class="research__info">
                                            <figure class="research__avatar">
                                                <img src="{{$admin->image}}" alt="Yulia Dmitrieva" width="54" height="56">
                                            </figure>
                                            <div class="research__left">
                                                <strong class="h4">{{$admin->name}}</strong>
                                                <span class="gray">{{$admin->email}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <div class="pl-item pl-item--social">
                        {!!$project->contacts!!}
                    </div>
                    <button class="btn btn--black law__btn btn-reset openModalRegistration" type="button">
                        <span>
                            @lang('sidebar.registration')
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
        @if (count($councilExperts) > 0)
        <div class="modb">
            <h3 class="projects-law__subtitle">
                Members of the Advisory Board
            </h3>
            <p class="modb__text serif-big">
                The Advisory Board, in particular, determines the issues of the School’s Special courses, its experts
                and students.
            </p>
            <div class="row modb-row">
                @foreach ($councilExperts as $expert)
                <div class="col-md-4 modb-col">
                    <div class="modb-item">
                        @if ($expert->image)
                            <img src="{{$expert->image}}" alt="{{$expert->image}}" width="54" height="56">
                        @endif
                        <div class="modb-item__text">
                            <strong>
                                {{$expert->name}}
                            </strong>
                            <button class="modb-item__btn openModalCouncil3 btn-reset" type="button">
                                Read more
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.68244 0.300917L8.99396 0.166929C9.46928 0.154939 9.84489 0.530542 9.8329 1.00586L9.69891 6.31738C9.68692 6.7927 9.29188 7.18774 8.81656 7.19973C8.34124 7.21172 7.96563 6.83612 7.97762 6.3608L8.0592 3.12706L1.62092 9.56534C1.27633 9.90992 0.731406 9.92367 0.403782 9.59604C0.0761592 9.26842 0.0899052 8.72349 0.434485 8.37891L6.87277 1.94063L3.63902 2.0222C3.1637 2.03419 2.7881 1.65859 2.80009 1.18327C2.81208 0.70795 3.20712 0.312907 3.68244 0.300917Z"
                                        fill="#A9A8A8" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        <div class="coc">
            <h3 class="projects-law__subtitle">
                Collection of courses
            </h3>
            <div class="col-md-8">
                <div class="row coc-row">
                    <div class="col-md-6 coc-col">
                        <div class="coc-item">
                            <a href="#" class="link-reset serif-big">
                                Customary International Law
                                <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.46064 0.300917L9.77216 0.166929C10.2475 0.154939 10.6231 0.530542 10.6111 1.00586L10.4771 6.31738C10.4651 6.7927 10.0701 7.18774 9.59475 7.19973C9.11944 7.21172 8.74383 6.83612 8.75582 6.3608L8.8374 3.12706L2.39911 9.56534C2.05453 9.90992 1.5096 9.92367 1.18198 9.59604C0.854357 9.26842 0.868103 8.72349 1.21268 8.37891L7.65097 1.94063L4.41722 2.0222C3.9419 2.03419 3.5663 1.65859 3.57829 1.18327C3.59028 0.70795 3.98532 0.312907 4.46064 0.300917Z"
                                        fill="#A9A8A8" />
                                </svg>
                            </a>
                            <span>
                                Michael Wood
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 coc-col">
                        <div class="coc-item">
                            <a href="#" class="link-reset serif-big">
                                Law of Treaties
                                <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.46064 0.300917L9.77216 0.166929C10.2475 0.154939 10.6231 0.530542 10.6111 1.00586L10.4771 6.31738C10.4651 6.7927 10.0701 7.18774 9.59475 7.19973C9.11944 7.21172 8.74383 6.83612 8.75582 6.3608L8.8374 3.12706L2.39911 9.56534C2.05453 9.90992 1.5096 9.92367 1.18198 9.59604C0.854357 9.26842 0.868103 8.72349 1.21268 8.37891L7.65097 1.94063L4.41722 2.0222C3.9419 2.03419 3.5663 1.65859 3.57829 1.18327C3.59028 0.70795 3.98532 0.312907 4.46064 0.300917Z"
                                        fill="#A9A8A8" />
                                </svg>
                            </a>
                            <span>
                                Marcelo G. Koahen
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 coc-col">
                        <div class="coc-item">
                            <a href="#" class="link-reset serif-big">
                                International Courts and <br>
                                Tribunals and the Sources <br>
                                of International Law
                                <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.46064 0.300917L9.77216 0.166929C10.2475 0.154939 10.6231 0.530542 10.6111 1.00586L10.4771 6.31738C10.4651 6.7927 10.0701 7.18774 9.59475 7.19973C9.11944 7.21172 8.74383 6.83612 8.75582 6.3608L8.8374 3.12706L2.39911 9.56534C2.05453 9.90992 1.5096 9.92367 1.18198 9.59604C0.854357 9.26842 0.868103 8.72349 1.21268 8.37891L7.65097 1.94063L4.41722 2.0222C3.9419 2.03419 3.5663 1.65859 3.57829 1.18327C3.59028 0.70795 3.98532 0.312907 4.46064 0.300917Z"
                                        fill="#A9A8A8" />
                                </svg>
                            </a>
                            <span>
                                Marcelo G. Koahen
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 coc-col">
                        <div class="coc-item">
                            <a href="#" class="link-reset serif-big">
                                Sources of International <br>
                                Law in Constitutional <br>
                                Jurisdiction
                                <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.46064 0.300917L9.77216 0.166929C10.2475 0.154939 10.6231 0.530542 10.6111 1.00586L10.4771 6.31738C10.4651 6.7927 10.0701 7.18774 9.59475 7.19973C9.11944 7.21172 8.74383 6.83612 8.75582 6.3608L8.8374 3.12706L2.39911 9.56534C2.05453 9.90992 1.5096 9.92367 1.18198 9.59604C0.854357 9.26842 0.868103 8.72349 1.21268 8.37891L7.65097 1.94063L4.41722 2.0222C3.9419 2.03419 3.5663 1.65859 3.57829 1.18327C3.59028 0.70795 3.98532 0.312907 4.46064 0.300917Z"
                                        fill="#A9A8A8" />
                                </svg>
                            </a>
                            <span>
                                Bakhtiyar Tuzmukhamedov
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="coc-link link-reset serif-big">
                See all courses of Summer School
                <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M4.46064 0.300918L9.77216 0.16693C10.2475 0.15494 10.6231 0.530543 10.6111 1.00586L10.4771 6.31738C10.4651 6.7927 10.0701 7.18774 9.59475 7.19973C9.11943 7.21172 8.74383 6.83612 8.75582 6.3608L8.8374 3.12706L2.39911 9.56534C2.05453 9.90992 1.5096 9.92367 1.18198 9.59604C0.854357 9.26842 0.868103 8.72349 1.21268 8.37891L7.65097 1.94063L4.41722 2.0222C3.9419 2.03419 3.5663 1.65859 3.57829 1.18327C3.59028 0.70795 3.98532 0.312907 4.46064 0.300918Z"
                        fill="#A9A8A8" />
                </svg>
            </a>
        </div>
        {!!$project->other_information!!}
    </div>
</section>


<div class="modal modal--registration modalRegistration" role="dialog" aria-modal="true">
    <div class="modal__content">
      <div class="modal__body">
        <div class="container">
          <div class="modal__top">
            <h3 class="modal__title">
              Registration
            </h3>
            <button type="button" class="modalClose btn-reset modal__arrow" aria-label="Close modal">
              <svg width="20" height="10" viewBox="0 0 20 10" fill="none">
                <path d="M5.07905 10L0.319447 5.6972C-0.106483 5.31215 -0.106483 4.68785 0.319447 4.3028L5.07905 0L6.62148 1.3944L3.72375 4.01401L20 4.01401L20 5.98599L3.72375 5.98599L6.62148 8.60561L5.07905 10Z" fill="white"/>
              </svg>
            </button>
          </div>
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
              <div class="modal-input">
                <label class="modal-input__label">
                  <input class="modal-input__field input-reset" type="email" placeholder="@lang('projects.form.email')" value="mikhailov">
                  <span class="modal-input__placeholder">@lang('projects.form.email')</span>
                </label>
                <div class="modal-input__example">
                  Example: example@domain.ru
                </div>
              </div>

              <div class="modal-input">
                <label class="modal-input__label">
                  <input class="modal-input__field input-reset" type="text" placeholder="@lang('projects.form.place')">
                  <span class="modal-input__placeholder">@lang('projects.form.place')</span>
                </label>
              </div>

              <div class="modal-input">
                <label class="modal-input__label">
                  <input class="modal-input__field input-reset" type="text" placeholder="@lang('projects.form.degree')">
                  <span class="modal-input__placeholder">@lang('projects.form.degree')</span>
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
                  @lang('projects.form.doc_law')
                </span>
                <p class="modal-file__text">
                  PDF / JPG / JPEG / TIFF
                </p>
                <input class="modal-file__input" type="file">
              </label>
              <label class="modal-file">
                <span class="modal-file__name gray">
                  @lang('projects.form.cv')
                </span>
                <p class="modal-file__text">
                  PDF / JPG / JPEG / TIFF
                </p>
                <input class="modal-file__input" type="file">
              </label>
              <label class="modal-file">
                <span class="modal-file__name gray">
                  @lang('projects.form.letter_russian')
                </span>
                <p class="modal-file__text">
                  PDF / JPG / JPEG / TIFF
                </p>
                <input class="modal-file__input" type="file">
              </label>
              <label class="modal-file">
                <span class="modal-file__name gray">
                  @lang('projects.form.letter_english')
                </span>
                <p class="modal-file__text">
                  PDF / JPG / JPEG / TIFF
                </p>
                <input class="modal-file__input" type="file">
              </label>
              <label class="modal-file">
                <span class="modal-file__name gray">
                  @lang('projects.form.photo')
                </span>
                <p class="modal-file__text">
                  PDF / JPG / JPEG / TIFF
                </p>
                <input class="modal-file__input" type="file">
              </label>

              <div class="modal-radio">
                <span class="modal-file__name gray">
                  @lang('projects.form.scholarship')
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
                    <path d="M1.92893 9.07107L9 2" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                  </svg>
                </a>

              </div>
              <button type="button" class="modal__submit btn-reset" disabled>
                @lang('projects.form.btn')
                <svg width="13" height="10" viewBox="0 0 13 10" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.89101 0.745718L12.7416 4.40679C13.0861 4.73441 13.0861 5.26559 12.7416 5.59321L8.89101 9.25428C8.54643 9.58191 7.98776 9.58191 7.64318 9.25428C7.2986 8.92666 7.2986 8.39548 7.64318 8.06785L9.98746 5.83893H0.882353C0.395043 5.83893 0 5.46333 0 5C0 4.53667 0.395043 4.16107 0.882353 4.16107H9.98746L7.64318 1.93215C7.2986 1.60452 7.2986 1.07334 7.64318 0.745718C7.98776 0.418094 8.54643 0.418094 8.89101 0.745718Z" fill="white"/>
                </svg>
              </button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
