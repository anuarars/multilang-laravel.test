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
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>ФИО:</label>
                        {!! Form::text($locale.'[name]', $item->translate($locale)->name,
                         array('class' => 'form-control', 'required' => true)) !!}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Описание:</label>
                        {!! Form::textarea($locale.'[description]', $item->translate($locale)->description,
                         array('class' => 'form-control')) !!}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Год:</label>
            {!! Form::text('year', $item->year, $attributes = ['class' => 'form-control', 'required' => true]) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Работа:</label>
            {!! Form::file('file', ['class' => 'form-control']) !!}
            <p>{{$item->file}}</p>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>Проект:</label>
            {!! Form::select('project_id', $projects, null, ['class' => 'form-select', 'data-choices' => '{"searchEnabled": true}', 'placeholder' => 'Выбрать проект'])  !!}
        </div>
    </div>
</div>

<div class="form-group mt-2">
    <a class="btn btn-default pull-right" href="{{ route('admin.works.index') }}">Назад</a>
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>
