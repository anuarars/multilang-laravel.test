@extends('layouts.app')

@section('meta_title')
    @lang('common.agendas')
@endsection

@section('body')
<section class="agenda-2 pb200">
    <div class="container">
        <span class="italic">
            7 @lang('headers.relevant')
        </span>
        <h1 class="agenda-2__title" style="text-transform: uppercase">
            @lang('headers.agenda')
        </h1>
        <div class="row agenda-2__row">
            @foreach ($agendas as $agenda)
                <div class="col-md-4 agenda-2__col">
                    <a href="{{route('agendas.show', $agenda->id)}}" class="agenda-2__item link-reset">
                        <div class="agenda-2__img">
                            <img src="{{$agenda->image}}" alt="agenda image">
                        </div>
                        <strong class="agenda-2__name">
                            {{$agenda->name}}
                        </strong>
                        <p class="agenda-2__text">
                            {!!$agenda->short_description!!}
                        </p>
                        <span class="agenda-2__info">
                            @if ($agenda->publications->count() != 0)
                                @lang('common.publications'): {{$agenda->publications->count()}}<br>
                            @endif
                            @if ($agenda->experts->count() != 0)
                                @lang('common.experts'): {{$agenda->experts->count()}}<br>
                            @endif
                            @if ($agenda->events->count() != 0)
                                @lang('common.events'): {{$agenda->events->count()}}
                            @endif
                        </span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
