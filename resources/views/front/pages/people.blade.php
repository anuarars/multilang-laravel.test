@extends('layouts.app')

@section('body')
<section class="people pb200">
    <div class="container">
        <ul class="breadcrumbs list-reset">
            <li>
                <a href="#">@lang('page.about')</a>
            </li>
            <li>
                @lang('menu.people')
            </li>
        </ul>
        <span class="italic">
            @lang('headers.legal-professionals')
        </span>
        <h1 class="people__title">
            @lang('headers.people')
        </h1>
        <div class="people-team">
            <a href="{{route('team.index')}}" class="people-title link-reset">
                <h3>
                    @lang('headers.team')
                </h3>
                <svg width="13" height="10" viewBox="0 0 13 10" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.89101 0.745718L12.7416 4.40679C13.0861 4.73441 13.0861 5.26559 12.7416 5.59321L8.89101 9.25428C8.54643 9.58191 7.98776 9.58191 7.64318 9.25428C7.2986 8.92666 7.2986 8.39548 7.64318 8.06785L9.98746 5.83893H0.882353C0.395043 5.83893 0 5.46333 0 5C0 4.53667 0.395043 4.16107 0.882353 4.16107H9.98746L7.64318 1.93215C7.2986 1.60452 7.2986 1.07334 7.64318 0.745718C7.98776 0.418094 8.54643 0.418094 8.89101 0.745718Z"
                        fill="#3E3E3E" />
                </svg>
            </a>
            <div class="people-team__row">
                @foreach ($team as $staff)
                    <div class="p-item">
                        <img src="{{$staff->image}}" srcset="{{$staff->image}}" alt="{{$staff->image}}">
                        <strong class="p-item__title">
                            {{$staff->name}}
                        </strong>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="people-experts">
            <a href="{{route('experts.index')}}" class="people-title people-title--mini link-reset">
                <h3>
                    @lang('headers.speakers')
                </h3>
                <svg width="13" height="10" viewBox="0 0 13 10" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.89101 0.745718L12.7416 4.40679C13.0861 4.73441 13.0861 5.26559 12.7416 5.59321L8.89101 9.25428C8.54643 9.58191 7.98776 9.58191 7.64318 9.25428C7.2986 8.92666 7.2986 8.39548 7.64318 8.06785L9.98746 5.83893H0.882353C0.395043 5.83893 0 5.46333 0 5C0 4.53667 0.395043 4.16107 0.882353 4.16107H9.98746L7.64318 1.93215C7.2986 1.60452 7.2986 1.07334 7.64318 0.745718C7.98776 0.418094 8.54643 0.418094 8.89101 0.745718Z"
                        fill="#3E3E3E" />
                </svg>
            </a>
            <div class="people-team__row">
                @foreach ($experts as $expert)
                    <div class="p-item">
                        <img src="{{$expert->image}}" srcset="{{$expert->image}}" alt="{{$expert->image}}">
                        <strong class="p-item__title">
                            {{$expert->name}}
                        </strong>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
