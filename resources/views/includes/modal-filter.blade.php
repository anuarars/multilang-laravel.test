<form class="filtersForm" action="{{route('search.index')}}" method="GET">
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
                                        @lang('filters.agenda')
                                    </strong>
                                    <span class="filters__btn-text">
                                         @lang('filters.choose-agenda')
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
                                                        @lang('filters.agenda')
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
                                                                                type="checkbox" name="agendas[]" value="{{$agenda->id}}">
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
                                                                                type="checkbox" name="agendas[]"
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
                                                            @lang('filters.clear-all')
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
                                                @lang('filters.clear-all')
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <button class="filters__btn btn-reset filtersBtnOpen filtersTitleExperts"
                                    type="button">
                                    <strong class="h2 filters__btn-title " data-count="">
                                        @lang('filters.experts')
                                    </strong>
                                    <span class="filters__btn-text">
                                        <span>
                                            @lang('filters.choose-experts')
                                        </span>
                                        <span class="filters__btn-chooses">

                                        </span>
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
                                                        @lang('filters.experts')
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
                                                                                type="checkbox" name="experts[]" value="{{$agenda->id}}">
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
                                                                                type="checkbox" name="experts[]" value="{{$agenda->id}}">
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
                                                                                type="checkbox" name="experts[]" value="{{$agenda->id}}">
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
                                                                                type="checkbox" name="experts[]" value="{{$agenda->id}}">
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
                                                            @lang('filters.clear-all')
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
                                                @lang('filters.clear-all')
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <button class="filters__btn btn-reset filtersBtnOpen filtersTitleKeywords"
                                    type="button">
                                    <strong class="h2 filters__btn-title" data-count="">
                                        @lang('filters.keywords')
                                    </strong>
                                    <span class="filters__btn-text">
                                        <span>
                                            @lang('filters.choose-keywords')
                                        </span>
                                        <span class="filters__btn-chooses">

                                        </span>
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
                                                        @lang('filters.keywords')
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
                                                                                type="checkbox" name="tags[]" value="{{$tag->id}}">
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
                                                                                type="checkbox" name="tags[]" value="{{$tag->id}}">
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
                                                                                type="checkbox" name="tags[]" value="{{$tag->id}}">
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
                                                                                type="checkbox" name="tags[]" value="{{$tag->id}}">
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
                                                                                type="checkbox" name="tags[]" value="{{$tag->id}}">
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
                                                                                type="checkbox" name="tags[]" value="{{$tag->id}}">
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
                                                            @lang('filters.clear-all')
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
                                                @lang('filters.clear-all')
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <button class="filters__btn btn-reset filtersBtnOpen filtersTitleMaterial"
                                    type="button">
                                    <strong class="h2 filters__btn-title" data-count="">
                                        @lang('filters.material-type')
                                    </strong>
                                    <span class="filters__btn-text">
                                        <span>
                                            @lang('filters.choose-material-type')
                                        </span>
                                        <span class="filters__btn-chooses">

                                        </span>
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
                                                        @lang('filters.material-type')
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
                                                                        type="checkbox" name="type[]" value="event">
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
                                                                        type="checkbox" name="type[]" value="news">
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
                                                                        type="checkbox" name="type[]" value="publication">
                                                                    <span class="fm-item__name">
                                                                        Publications
                                                                    </span>
                                                                </label>
                                                                <label class="fm-item__label">
                                                                    <input
                                                                        class="fm-item__checkbox fm-item__checkbox--word input-reset"
                                                                        type="checkbox" name="type[]" value="project">
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
                                                            @lang('filters.clear-all')
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
                                                @lang('filters.clear-all')
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <button
                                    class="filters__btn filters__btn--date btn-reset filtersBtnOpen filtersTitleDate"
                                    type="button">
                                    <strong class="h2 filters__btn-title" data-count="">
                                        @lang('filters.month-year')
                                    </strong>
                                    <span class="filters__btn-text">
                                        @lang('filters.choose-month-year')
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
                                                        @lang('filters.month-year')
                                                    </h2>
                                                    <div class="fm-row row">
                                                        <div class="col-md-3">
                                                            <div class="fm-item">
                                                                <p class="fm-item__letter ttn">
                                                                    @lang('filters.from')
                                                                </p>
                                                                <div class="fm-item__row">
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--from fm-item__checkbox--date input-reset"
                                                                            type="radio" name="from_m" value="Jan"
                                                                            data-mvalue="1">
                                                                        <span class="fm-item__name">
                                                                            @lang('month.Jan')
                                                                        </span>
                                                                    </label>
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--from fm-item__checkbox--date input-reset"
                                                                            type="radio" name="from_y" value="2016">
                                                                        <span class="fm-item__name">
                                                                            2016
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item__row">
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--from fm-item__checkbox--date input-reset"
                                                                            type="radio" name="from_m" value="Feb"
                                                                            data-mvalue="2">
                                                                        <span class="fm-item__name">
                                                                            @lang('month.Feb')
                                                                        </span>
                                                                    </label>
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--from fm-item__checkbox--date input-reset"
                                                                            type="radio" name="from_y" value="2017">
                                                                        <span class="fm-item__name">
                                                                            2017
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item__row">
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--from fm-item__checkbox--date input-reset"
                                                                            type="radio" name="from_m" value="Mar"
                                                                            data-mvalue="3">
                                                                        <span class="fm-item__name">
                                                                            @lang('month.Mar')
                                                                        </span>
                                                                    </label>
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--from fm-item__checkbox--date input-reset"
                                                                            type="radio" name="from_y" value="2018">
                                                                        <span class="fm-item__name">
                                                                            2018
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item__row">
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--from fm-item__checkbox--date input-reset"
                                                                            type="radio" name="from_m" value="Apr"
                                                                            data-mvalue="4">
                                                                        <span class="fm-item__name">
                                                                            @lang('month.Apr')
                                                                        </span>
                                                                    </label>
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--from fm-item__checkbox--date input-reset"
                                                                            type="radio" name="from_y" value="2019">
                                                                        <span class="fm-item__name">
                                                                            2019
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item__row">
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--from fm-item__checkbox--date input-reset"
                                                                            type="radio" name="from_m" value="May"
                                                                            data-mvalue="5">
                                                                        <span class="fm-item__name">
                                                                            @lang('month.May')
                                                                        </span>
                                                                    </label>
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--from fm-item__checkbox--date input-reset"
                                                                            type="radio" name="from_y" value="2020">
                                                                        <span class="fm-item__name">
                                                                            2020
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item__row">
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--from fm-item__checkbox--date input-reset"
                                                                            type="radio" name="from_m" value="June"
                                                                            data-mvalue="6">
                                                                        <span class="fm-item__name">
                                                                            @lang('month.June')
                                                                        </span>
                                                                    </label>
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--from fm-item__checkbox--date input-reset"
                                                                            type="radio" name="from_y" value="2021">
                                                                        <span class="fm-item__name">
                                                                            2021
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item__row">
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--from fm-item__checkbox--date input-reset"
                                                                            type="radio" name="from_m" value="July"
                                                                            data-mvalue="7">
                                                                        <span class="fm-item__name">
                                                                            @lang('month.July')
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item__row">
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--from fm-item__checkbox--date input-reset"
                                                                            type="radio" name="from_m" value="Aug"
                                                                            data-mvalue="8">
                                                                        <span class="fm-item__name">
                                                                            @lang('month.Aug')
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item__row">
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--from fm-item__checkbox--date input-reset"
                                                                            type="radio" name="from_m" value="Sep"
                                                                            data-mvalue="9">
                                                                        <span class="fm-item__name">
                                                                            @lang('month.Sep')
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item__row">
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--from fm-item__checkbox--date input-reset"
                                                                            type="radio" name="from_m" value="Oct"
                                                                            data-mvalue="10">
                                                                        <span class="fm-item__name">
                                                                            @lang('month.Oct')
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item__row">
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--from fm-item__checkbox--date input-reset"
                                                                            type="radio" name="from_m" value="Nov"
                                                                            data-mvalue="11">
                                                                        <span class="fm-item__name">
                                                                            @lang('month.Nov')
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item__row">
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--from fm-item__checkbox--date input-reset"
                                                                            type="radio" name="from_m" value="Dec"
                                                                            data-mvalue="12">
                                                                        <span class="fm-item__name">
                                                                            @lang('month.Dec')
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="fm-item">
                                                                <p class="fm-item__letter ttn">
                                                                    @lang('filters.to')
                                                                </p>
                                                                <div class="fm-item__row">
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--date fm-item__checkbox--to input-reset"
                                                                            type="radio" name="to_m" value="Jan"
                                                                            data-mvalue="1">
                                                                        <span class="fm-item__name">
                                                                            @lang('month.Jan')
                                                                        </span>
                                                                    </label>
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--date fm-item__checkbox--to input-reset"
                                                                            type="radio" name="to_y" value="2016">
                                                                        <span class="fm-item__name">
                                                                            2016
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item__row">
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--date fm-item__checkbox--to input-reset"
                                                                            type="radio" name="to_m" value="Feb"
                                                                            data-mvalue="2">
                                                                        <span class="fm-item__name">
                                                                            @lang('month.Feb')
                                                                        </span>
                                                                    </label>
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--date fm-item__checkbox--to input-reset"
                                                                            type="radio" name="to_y" value="2017">
                                                                        <span class="fm-item__name">
                                                                            2017
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item__row">
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--date fm-item__checkbox--to input-reset"
                                                                            type="radio" name="to_m" value="Mar"
                                                                            data-mvalue="3">
                                                                        <span class="fm-item__name">
                                                                            @lang('month.Mar')
                                                                        </span>
                                                                    </label>
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--date fm-item__checkbox--to input-reset"
                                                                            type="radio" name="to_y" value="2018">
                                                                        <span class="fm-item__name">
                                                                            2018
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item__row">
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--date fm-item__checkbox--to input-reset"
                                                                            type="radio" name="to_m" value="Apr"
                                                                            data-mvalue="4">
                                                                        <span class="fm-item__name">
                                                                            @lang('month.Apr')
                                                                        </span>
                                                                    </label>
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--date fm-item__checkbox--to input-reset"
                                                                            type="radio" name="to_y" value="2019">
                                                                        <span class="fm-item__name">
                                                                            2019
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item__row">
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--date fm-item__checkbox--to input-reset"
                                                                            type="radio" name="to_m" value="May"
                                                                            data-mvalue="5">
                                                                        <span class="fm-item__name">
                                                                            @lang('month.May')
                                                                        </span>
                                                                    </label>
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--date fm-item__checkbox--to input-reset"
                                                                            type="radio" name="to_y" value="2020">
                                                                        <span class="fm-item__name">
                                                                            2020
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item__row">
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--date fm-item__checkbox--to input-reset"
                                                                            type="radio" name="to_m" value="June"
                                                                            data-mvalue="6">
                                                                        <span class="fm-item__name">
                                                                            @lang('month.June')
                                                                        </span>
                                                                    </label>
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--date fm-item__checkbox--to input-reset"
                                                                            type="radio" name="to_y" value="2021">
                                                                        <span class="fm-item__name">
                                                                            2021
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item__row">
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--date fm-item__checkbox--to input-reset"
                                                                            type="radio" name="to_m" value="July"
                                                                            data-mvalue="7">
                                                                        <span class="fm-item__name">
                                                                            @lang('month.July')
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item__row">
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--date fm-item__checkbox--to input-reset"
                                                                            type="radio" name="to_m" value="Aug"
                                                                            data-mvalue="8">
                                                                        <span class="fm-item__name">
                                                                            @lang('month.Aug')
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item__row">
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--date fm-item__checkbox--to input-reset"
                                                                            type="radio" name="to_m" value="Sep"
                                                                            data-mvalue="9">
                                                                        <span class="fm-item__name">
                                                                            @lang('month.Sep')
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item__row">
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--date fm-item__checkbox--to input-reset"
                                                                            type="radio" name="to_m" value="Oct"
                                                                            data-mvalue="10">
                                                                        <span class="fm-item__name">
                                                                            @lang('month.Oct')
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item__row">
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--date fm-item__checkbox--to input-reset"
                                                                            type="radio" name="to_m" value="Nov"
                                                                            data-mvalue="11">
                                                                        <span class="fm-item__name">
                                                                            @lang('month.Nov')
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="fm-item__row">
                                                                    <label class="fm-item__label">
                                                                        <input
                                                                            class="fm-item__checkbox fm-item__checkbox--date fm-item__checkbox--to input-reset"
                                                                            type="radio" name="to_m" value="Dec"
                                                                            data-mvalue="12">
                                                                        <span class="fm-item__name">
                                                                            @lang('month.Dec')
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
                                                            @lang('filters.clear-all')
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
                                                @lang('filters.clear-all')
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="filters__buttons filters__buttons--all">
                                <button class="filter-submit btn-reset" type="submit">
                                    <span>@lang('filters.search-results')</span>
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
                                    @lang('filters.clear-all')
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="filter-btn filter-btn--void filterBtn btn-reset" type="button">
            <span class="filter-btn__text">
                @lang('filters.trigger-btn')
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

