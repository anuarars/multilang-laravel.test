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
                <label>Название:</label>
                {!! Form::text($locale.'[name]', $item->translate($locale)->name,
                 array('class' => 'form-control', 'required' => true, 'placeholder' => 'Название')) !!}
            </div>
            <div class="form-group">
                <label>Описание:</label>
                {!! Form::textarea($locale.'[description]', $item->translate($locale)->description,
                 array('class' => 'form-control', 'id' => 'editor-descs-'.$locale, 'placeholder' => 'Описание')) !!}
            </div>
        </div>
    @endforeach
</div>


<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Тип: <span class="glyphicon glyphicon-info-sign"></span></label>
            {!! Form::select('type', ['organization' => 'organization', 'person' => 'person'], null, ['class' => 'form-select disabled', 'placeholder' => 'Выбрать повестку', 'data-choices' => '{"searchEnabled": true}'])  !!}
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group">
        <a class="btn btn-warning pull-right" href="{{ route('admin.donators.index') }}">Назад</a>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
</div>