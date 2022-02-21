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
                <label>Наименование типа мероприятия:</label>
                {!! Form::text($locale.'[title]', $item->translate($locale)->title,
                 array('class' => 'form-control', 'required' => true)) !!}
            </div>
        </div>
    @endforeach
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Изображение:</label>
            {!! Form::file('image', ['class' => 'form-control']) !!}
        </div>
        @if ($item->image)
            <img src="{{$item->image}}" alt="{{$item->image}}" class="img-responsive w-100" style="height: 200px">
        @endif
    </div>
</div>

<div class="form-group">
    <a class="btn btn-default pull-right" href="{{ route('admin.event_types.index') }}">Назад</a>
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>