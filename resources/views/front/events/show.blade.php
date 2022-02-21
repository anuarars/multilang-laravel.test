@extends('layouts.app')

@section('meta_title')
{{$event->title}}
@endsection

@section('body')
<section class="research events-page" lang="{{\App::getLocale()}}">
    <div class="container">
        <ul class="breadcrumbs list-reset">
            <li>
                <a href="{{route('events.index')}}">@lang('page.events')</a>
            </li>
            <li>
                {{$event->title}}
            </li>
        </ul>
        <h1 class="h2 events-page__title titleObserver">
            {{$event->title}}
        </h1>
        <div class="row justify-content-between events-row">
            <div class="col-md-7 research__column">
                <div class="events__group-text">
                    {!!$event->description!!}
                </div>
            </div>
            <div class="col-md-4 research__column">
                <aside class="research__aside">
                    <div class="research__col">
                        <h4 class="research__name">
                            @lang('sidebar.date')
                        </h4>
                        <p class="research__col-text">
                            @if (Date::parse($event->date_start)->format('H:i') == '00:00' &&
                            Date::parse($event->date_end)->format('H:i') == '00:00')
                                @if (\App::getLocale() == 'ru')
                                    {{ Date::parse($event->date_start)->locale(\App::getLocale())->format('d F Y') }}
                                @else
                                    {{ Date::parse($event->date_start)->locale(\App::getLocale())->format('M d, Y') }}
                                @endif
                            @else
                                @if (\App::getLocale() == 'ru')
                                    {{ Date::parse($event->date_start)->locale(\App::getLocale())->format('d F Y') }}
                                    {{ Date::parse($event->date_start)->format('H:i') }}...{{ Date::parse($event->date_end)->format('H:i') }}
                                @else
                                    {{ Date::parse($event->date_start)->locale(\App::getLocale())->format('M d, Y') }}
                                    {{ Date::parse($event->date_start)->format('H:i') }}...{{ Date::parse($event->date_end)->format('H:i') }}
                                @endif
                            @endif
                        </p>
                    </div>
                    {{-- @if ($event->type)
                        <div class="research__col">
                            <h4 class="research__name">
                                @lang('sidebar.event_type')
                            </h4>
                            <p class="research__col-text">
                                {{$event->type->title}}
                    </p>
            </div>
            @endif --}}
            @if ($event->agenda)
                <div class="research__col">
                    <h4 class="research__name">
                        @lang('sidebar.agenda')
                    </h4>
                    <p class="research__col-text">
                        <a href="#" class="more-link link-reset"
                            onclick="document.getElementById('agenda-{{$event->agenda->id}}').submit();">
                            {{$event->agenda->name}}
                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                                <g opacity="0.5">
                                    <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </a>
                    </p>
                    <form class="filtersForm" action="{{route('search.index')}}" method="GET" style="display: none"
                        id="agenda-{{$event->agenda->id}}">
                        <input type="hidden" name="agendas[]" value="{{$event->agenda->id}}">
                    </form>
                </div>
            @endif
            @if (count($event->experts) > 0)
                <div class="research__col">
                    <span class="pl-item__title gray">
                        @lang('sidebar.se')
                    </span>
                    <button class="more-link btn-reset openModalCouncil">
                        @lang('sidebar.members')
                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                            <g opacity="0.5">
                                <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </button>
                </div>
            @endif
            @if (count($event->materials) > 0)
                <div class="research__col">
                    <span class="pl-item__title gray">
                        @lang('sidebar.materials')
                    </span>
                    <a href="{{$event->materials->first()->url}}" class="more-link btn-reset openModalCouncil1">
                        @lang('sidebar.files')
                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                            <g opacity="0.5">
                                <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </a>
                </div>
            @endif
            @if (count($event->tags) > 0)
            <div class="research__col">
                <h4 class="research__name">
                    @lang('sidebar.keywords')
                </h4>
                <div class="ep-aside__group">
                    @foreach ($event->tags as $tag)
                    <p class="research__col-text">
                        <a href="#" class="more-link link-reset"
                            onclick="document.getElementById('tag-{{$tag->id}}').submit();">
                            {{$tag->name}}
                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                                <g opacity="0.5">
                                    <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </a>
                    </p>
                    <form class="filtersForm" action="{{route('search.index')}}" method="GET" style="display: none"
                        id="tag-{{$tag->id}}">
                        <input type="hidden" name="tags[]" value="{{$tag->id}}">
                    </form>
                    @endforeach
                </div>
            </div>
            @endif
            @if ($event->duration)
            <div class="research__col">
                <h4 class="research__name">
                    Duration
                </h4>
                <p class="research__col-text">
                    {{$event->duration}}
                </p>
            </div>
            @endif
            @if ($event->reg_types)
            <div class="research__col">
                <h4 class="research__name">
                    @lang('events.type')
                </h4>
                <p class="research__col-text">
                    {{$event::REG_TYPES[$event->reg_types]}}
                </p>
            </div>
            @endif
            @if ($event->access)
            <div class="research__col">
                <h4 class="research__name">
                    @lang('sidebar.format')
                </h4>
                <p class="research__col-text">
                    {{$event::FORMAT_TYPES[$event->access]}}
                </p>
            </div>
            @endif
            @if ($event->location)
            <div class="research__col">
                <h4 class="research__name">
                    @lang('sidebar.location')
                </h4>
                <p class="research__col-text lh150">
                    {{$event->city ?? ""}}<br>
                    {{$event->location ?? ""}}
                </p>
            </div>
            @endif
            <a class="btn btn--black events__btn link-reset openModalTake" href="#" target="_blank">
                <span>
                    @lang('sidebar.take_part')
                </span>
                <svg width="13" height="10" viewBox="0 0 13 10" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.89101 0.745718L12.7416 4.40679C13.0861 4.73441 13.0861 5.26559 12.7416 5.59321L8.89101 9.25428C8.54643 9.58191 7.98776 9.58191 7.64318 9.25428C7.2986 8.92666 7.2986 8.39548 7.64318 8.06785L9.98746 5.83893H0.882353C0.395043 5.83893 0 5.46333 0 5C0 4.53667 0.395043 4.16107 0.882353 4.16107H9.98746L7.64318 1.93215C7.2986 1.60452 7.2986 1.07334 7.64318 0.745718C7.98776 0.418094 8.54643 0.418094 8.89101 0.745718Z"
                        fill="white" />
                </svg>
            </a>
            </aside>
        </div>
    </div>
    <div class="other-research other-events">
        <h3 class="event-page__title">
            @lang('events.other')
        </h3>
        <div class="row other-news__row" id="pagination_data">
            @include('pagination.other_events')
        </div>
        <div class="pagination" id="pagination">
            <div class="pagination__row">
                <ul class="pagination__list list-reset">
                    <li>
                        <a href="#" class="disabled" id="first_page">1</a>
                    </li>
                    <li>
                        <a href="#" class="disabled">…</a>
                    </li>
                    <li>
                        <a href="#" id="last_page">{{$events->lastPage()}}</a>
                    </li>
                </ul>
                <div class="pagination__btns">
                    <button class="btn-reset" type="button" disabled id="prev_page" page="{{$events->firstItem()}}">
                        <svg width="19" height="16" viewBox="0 0 19 16" fill="none">
                            <path
                                d="M18 9C18.5523 9 19 8.55228 19 8C19 7.44772 18.5523 7 18 7V9ZM0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM18 7L1 7V9L18 9V7Z"
                                fill="var(--black)" />
                        </svg>
                    </button>
                    <button class="btn-reset" type="button" id="next_page" page="{{$events->currentPage() + 1}}"
                        last-page="{{$events->lastPage()}}">
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
</section>

<div class="modal modalTake modal--take" role="dialog" aria-modal="true">
    <div class="modal__content">
        <div class="modal__body">
            <div class="container">
                <div class="modal__top">
                    <h3 class="modal__title">
                        Registration
                    </h3>
                    <button type="button" class="modalClose btn-reset modal__arrow" aria-label="Close modal">
                        <svg width="20" height="10" viewBox="0 0 20 10" fill="none">
                            <path
                                d="M5.07905 10L0.319447 5.6972C-0.106483 5.31215 -0.106483 4.68785 0.319447 4.3028L5.07905 0L6.62148 1.3944L3.72375 4.01401L20 4.01401L20 5.98599L3.72375 5.98599L6.62148 8.60561L5.07905 10Z"
                                fill="white" />
                        </svg>
                    </button>
                </div>
                <form action="{{route('events.register')}}" method="POST">
                    @csrf
                    <input type="hidden" name="event_id" value="{{$event->id}}">
                    <div class="modal__grid">
                        <div class="modal-input">
                            <label class="modal-input__label">
                                <input class="modal-input__field input-reset" type="text" placeholder="Name"
                                    name="name">
                                <span class="modal-input__placeholder">Name</span>
                            </label>
                        </div>
                        <div class="modal-input">
                            <label class="modal-input__label">
                                <input class="modal-input__field input-reset" type="text" placeholder="Surname"
                                    name="surname">
                                <span class="modal-input__placeholder">Surname</span>
                            </label>
                        </div>
                        <div class="modal-input">
                            <label class="modal-input__label">
                                <input class="modal-input__field input-reset" type="tel" placeholder="Phone number"
                                    name="phone">
                                <span class="modal-input__placeholder">Phone number</span>
                            </label>
                        </div>
                        <div class="modal-input">
                            <label class="modal-input__label">
                                <input class="modal-input__field input-reset" type="email" placeholder="Email"
                                    name="email">
                                <span class="modal-input__placeholder">Email</span>
                            </label>
                        </div>
                        <div class="modal-input">
                            <label class="modal-input__label">
                                <input class="modal-input__field input-reset" type="text" placeholder="Company"
                                    name="organization">
                                <span class="modal-input__placeholder">Company</span>
                            </label>
                        </div>
                        <div class="modal-input">
                            <label class="modal-input__label">
                                <input class="modal-input__field input-reset" type="text" placeholder="Occupation"
                                    name="jobTitle">
                                <span class="modal-input__placeholder">Occupation</span>
                            </label>
                        </div>
                    </div>
                    <div class="modal__bottom">
                        <div class="modal__personal modal__personal--grid">
                            <label class="modal__checkbox">
                                <input type="checkbox" class="input-reset" name="newsletter">
                                <span class="modal__checkbox-text">
                                    I want to receive newsletters from the ICLRC
                                </span>
                            </label>
                            <div class="modal__group">
                                <label class="modal__checkbox">
                                    <input type="checkbox" class="input-reset" name="processing" required>
                                </label>
                                <a href="#" class="link-reset">
                                    Personal data processing consent
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
                        </div>
                        <button type="submit" class="modal__submit btn-reset" disabled>
                            To take part
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
                            @foreach ($event->experts as $expert)
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
                            @foreach ($event->experts as $expert)
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

<script>
    var lang = $('.events-page').attr('lang');
    loadDataInit('#pagination', loadData);

    function loadData(page) {
        $.ajax({
            type: "GET",
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}",
            },
            url: "/ajax/" + lang + "/other_events?page=" + page,
            success: function (data) {
                $('#pagination_data').html(data);
            }
        });
    }

</script>
@endsection
