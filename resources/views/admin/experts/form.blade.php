<label>{!! Form::checkbox('is_show', null, $expert->is_show) !!} Показывать карточку?</label>

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
                <label>Имя/Фамилия:</label>
                {!! Form::text($locale.'[name]', $expert->translate($locale)->name,
                 array('class' => 'form-control', 'required' => true)) !!}
            </div>
            <div class="form-group">
                <label>Должность:</label>
                {!! Form::text($locale.'[jobTitle]', $expert->translate($locale)->jobTitle,
                 array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                <label>Страна:</label>
                {!! Form::text($locale.'[country]', $expert->translate($locale)->country,
                 array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                <label>Описание:</label>
                {!! Form::textarea($locale.'[description]', $expert->translate($locale)->description,
                 array('class' => 'mini-editor', 'id' => 'editor-desc'.$locale)) !!}
            </div>
        </div>
    @endforeach
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-6">
            <label>Фото:</label>
            {!! Form::file('image',array('class' => 'form-control')) !!}
            @if ($expert->image)
                <img src="{{$expert->image}}" alt="{{$expert->image}}" class="img-responsive w-100" style="height: 200px">
            @endif
        </div>
        <div class="col-md-6">
            <label>CV:</label>
            {!! Form::file('cv',array('class' => 'form-control')) !!}
            @if ($expert->cv)
                <img src="{{$expert->cv}}" alt="{{$expert->cv}}" class="img-responsive w-100" style="height: 200px">
            @endif
        </div>
        <div class="col-md-6">
            <label>Языки: <span class="glyphicon glyphicon-info-sign"></span></label>
            {!! Form::select('language_id[]', $languages, null, ['class' => 'form-select', 'multiple aria-label' =>'multiple select', 'data-choices' => '{"searchEnabled": true}', 'placeholder' => 'Выбрать язык'])  !!}
        </div>
        <div class="col-md-6">
            <label>Унивеститеты: <span class="glyphicon glyphicon-info-sign"></span></label>
            {!! Form::select('university_id[]', $universities, null, ['class' => 'form-select', 'multiple aria-label' =>'multiple select', 'data-choices' => '{"searchEnabled": true}', 'placeholder' => 'Выбрать унивеситет'])  !!}
        </div>
        <div class="col-md-6">
            <label>Повестка: <span class="glyphicon glyphicon-info-sign"></span></label>
            {!! Form::select('agenda_id[]', $agendas, null, ['class' => 'form-select', 'multiple aria-label' =>'multiple select', 'data-choices' => '{"searchEnabled": true}', 'placeholder' => 'Выбрать повестку'])  !!}
        </div>
        <div class="col-md-6">
            <label>Дипломы: <span class="glyphicon glyphicon-info-sign"></span></label>
            {!! Form::select('degree_id[]', $degrees, null, ['class' => 'form-select', 'multiple aria-label' =>'multiple select', 'data-choices' => '{"searchEnabled": true}', 'placeholder' => 'Выбрать диплом'])  !!}
        </div>
    </div>
</div>
<div class="form-group">
    <label>{!! Form::checkbox('type', null, $expert->type, ['class' => 'type-laureat-checkbox']) !!} Лауреат?</label>
    <div class="type-laureat" style="display:none;">
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label>Победный год:</label>
                    {!! Form::number('victory_year', $expert->victory_year,
                     array('class' => 'form-control')) !!}
                </div>
                <div class="col-md-4">
                    <label>Интервью:</label>
                    {!! Form::url('interview', $expert->interview,
                     array('class' => 'form-control')) !!}
                </div>
                <div class="col-md-4">
                    <label>Работы:</label>
                    {!! Form::url('works_link', $expert->works_link,
                     array('class' => 'form-control')) !!}
                </div>
            </div>
        <div class="form-group">
            <label>Работы:</label>
            {!! Form::file('works_file[]', ['multiple' => 'multiple', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <label>Статьи в журнале:</label>
        {!! Form::text('articles', $expert->articles,
         array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group mt-4">
    <ul class="list-group">
        @if ($expert->workfiles)
            <li class="list-group-item">
                <label>
                    Работы:
                </label>
                @foreach ($expert->workfiles as $workfile)
                    <p>{{$workfile->url}}</p>
                @endforeach
            </li>
        @endif
    </ul>
</div>
<script>
    $(document).ready(function () {

        if ($('.type-laureat-checkbox').prop("checked")){
            $('.type-laureat').show();
        }
        $('.type-laureat-checkbox').click(function (){
           $('.type-laureat').toggle();
        });

        CKEDITOR.plugins.addExternal('codemirror', '/js/codemirror/');
        CKEDITOR.config.contentsCss = '/js/linkbutton/css/contents.css';

        CKEDITOR.plugins.addExternal('linkbutton', '/js/linkbutton/');

        $('.editor').each(function (e) {
            CKEDITOR.replace(this.id, {
                allowedContent: true,
                extraPlugins: 'codemirror,linkbutton',
                height: 500,
                filebrowserBrowseUrl: '{{ route('elfinder.ckeditor') }}',
                codemirror: {
                    theme:'monokai',
                    enableCodeFolding:false,
                    showCommentButton:false,
                    showUncommentButton:false
                }
            });
        });

        $('.mini-editor').each(function (e) {
            CKEDITOR.replace(this.id, {
                toolbarGroups: [
                    {"name": "basicstyles", "groups": ["basicstyles", 'cleanup']},
                    {"name": "links", "groups": ["links"]},
                    {"name": "paragraph", "groups": ["list", "blocks"]}
                ]
            });
        });
    })
</script>


<div class="form-group">
    <a class="btn btn-default pull-right" href="{{ route('admin.experts.index') }}">Назад</a>

    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>