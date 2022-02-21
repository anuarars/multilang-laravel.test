<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Повестка: <span class="glyphicon glyphicon-info-sign"></span></label>
            {!! Form::select('agenda_id', $agendas, null, ['class' => 'form-select', 'placeholder' => 'Выбрать повестку', 'data-choices' => '{"searchEnabled": true}'])  !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Публикация: <span class="glyphicon glyphicon-info-sign"></span></label>
            {!! Form::select('publication_id', $publications, null, ['class' => 'form-select', 'placeholder' => 'Выбрать публикацию', 'data-choices' => '{"searchEnabled": true}'])  !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Мероприятие: <span class="glyphicon glyphicon-info-sign"></span></label>
            {!! Form::select('event_id', $events, null, ['class' => 'form-select', 'placeholder' => 'Выбрать повестку', 'data-choices' => '{"searchEnabled": true}'])  !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Новость: <span class="glyphicon glyphicon-info-sign"></span></label>
            {!! Form::select('news_id', $news, null, ['class' => 'form-select', 'placeholder' => 'Выбрать повестку', 'data-choices' => '{"searchEnabled": true}'])  !!}
        </div>
    </div>
</div>

<div class="form-group">
    <a class="btn btn-default pull-right" href="{{ route('admin.main-page.index') }}">Назад</a>
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>