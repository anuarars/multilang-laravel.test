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
                <label>Наименование типа публикации:</label>
                {!! Form::text($locale.'[name]', $item->translate($locale)->name,
                 array('class' => 'form-control', 'required' => true)) !!}
            </div>
        </div>
    @endforeach
</div>

<div class="form-group">
    <a class="btn btn-default pull-right" href="{{ route('admin.publication_types.index') }}">Назад</a>
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>