<ul class="nav nav-tabs card-header-tabs mb-3" id="localization" role="tablist">
    @foreach (config('app.content_locales') as $locale)
        <li class="nav-item" role="presentation">
            <a class="nav-link text-uppercase" data-bs-toggle="tab" data-bs-target="#loc-{{ $locale  }}"
               role="tab" aria-controls="loc-{{ $locale  }}" aria-selected="false">&nbsp;{{ $locale }}&nbsp;</a>
        </li>
    @endforeach
</ul>

<div class="tab-content">
    @foreach (config('translatable.locales') as $locale)
        <div class="tab-pane" id="loc-{{ $locale }}">
            <div class="form-group">
                <label>Описание:</label>
                {!! Form::textarea($locale.'[description]', $currentEvent->translate($locale)->description,
                 array('class' => 'form-control', 'id' => 'editor-'.$locale)) !!}
            </div>

        </div>
    @endforeach
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label>Мероприятия: <span class="glyphicon glyphicon-info-sign"></span></label>
            {!! Form::select('event_id', $events, null, ['class' => 'form-select', 'placeholder' => 'Выбрать', 'data-choices' => '{"searchEnabled": true}'])  !!}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>{!! Form::checkbox('is_active', 1, $currentEvent->is_active) !!} Включен</label>
        </div>
    </div>
</div>

<div class="form-group">
    <a class="btn btn-default pull-right" href="{{ route('admin.current-event.store') }}">Назад</a>

    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>