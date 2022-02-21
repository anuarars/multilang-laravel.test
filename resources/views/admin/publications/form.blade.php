<ul class="nav nav-tabs card-header-tabs mb-3" id="localization" role="tablist">
    @foreach (config('app.content_locales') as $locale)
        <li class="nav-publication" role="presentation">
            <a class="nav-link text-uppercase" data-bs-toggle="tab" data-bs-target="#loc-{{ $locale  }}"
               role="tab" aria-controls="loc-{{ $locale  }}" aria-selected="false">&nbsp;{{ $locale }}&nbsp;</a>
        </li>
    @endforeach
</ul>

<div class="tab-content">
    @foreach (config('translatable.locales') as $locale)
    <script>
        tinymce.PluginManager.add('example', function(editor, url) {
        var openDialog = function () {
            return editor.windowManager.open({
            title: 'Добавить tooltip',
            body: {
                type: 'panel',
                items: [
                    {
                        type: 'input',
                        name: 'title',
                        label: 'Title'
                    },
                    {
                        type: 'input',
                        name: 'description',
                        label: 'description'
                    }
                ]
            },
            buttons: [
                {
                type: 'cancel',
                text: 'Close'
                },
                {
                type: 'submit',
                text: 'Save',
                primary: true
                }
            ],
            onSubmit: function (api) {
                var data = api.getData();
                /* Insert content when the window form is submitted */
                editor.insertContent('<span class="tooltip-wrap"><button type="button" class="tooltip-word btn-reset">'+data.title+'</button><span class="tooltip" role="dialog"> <button type="button" class="btn-reset tooltip__close"></button> <span class="tooltip__text">'+data.description+'</span> </span><span>');
                api.close();
            }
            });
        };
        /* Add a button that opens a window */
        editor.ui.registry.addButton('example', {
            text: 'Tooltip',
            onAction: function () {
            /* Open window */
            openDialog();
            }
        });
        /* Adds a menu item, which can then be included in any menu via the menu/menubar configuration */
        editor.ui.registry.addMenuItem('example', {
            text: 'Example plugin',
            onAction: function() {
            /* Open window */
            openDialog();
            }
        });
        /* Return the metadata for the help plugin */
        return {
            getMetadata: function () {
                return  {
                    name: 'Example plugin',
                    url: 'http://exampleplugindocsurl.com'
                };
            }
        };
        });
    
        /*
        The following is an example of how to use the new plugin and the new
        toolbar button.
        */
        tinymce.init({
        selector: '#editor-descs-{{$locale}}',
        language: 'ru',
        height : "480",
        plugins: [
        "advlist autolink lists link image charmap print anchor",
        "searchreplace visualblocks code fullscreen media example help",
        ],
        toolbar: 'example | help'
        });
    </script>
        <div class="tab-pane" id="loc-{{ $locale }}">
            <div class="form-group">
                <label>Название:</label>
                {!! Form::text($locale.'[title]', $publication->translate($locale)->title,
                 array('class' => 'form-control', 'required' => true)) !!}
            </div>
            <div class="form-group">
                <label>Текст:</label>
                {!! Form::textarea($locale.'[content]', $publication->translate($locale)->content,
                 array('class' => 'editor', 'id' => 'editor-descs-'.$locale, 'files' => true)) !!}
            </div>
        </div>
    @endforeach
<div class="row">
    <div class="col-md-6">
        <label>Фото:</label>
        {!! Form::file('photo', ['class' => 'form-control']) !!}
        @if ($publication->image)
        <img src="{{$publication->image}}" alt="" class="w-100" style="height: 200px">
        @endif
    </div>
    <div class="col-md-6">
        <label>Материалы:</label>
        {!! Form::file('materials[]', ['multiple' => 'multiple','class' => 'form-control']) !!}
        @foreach ($publication->gallery as $item)
            {{$item->url}}
        @endforeach
    </div>
    <div class="col-md-6">
        <label>PDF на Рус:</label>
        {!! Form::file('pdf_ru', ['class' => 'form-control']) !!}
        {{$publication->translate('ru')->pdf}}
    </div>
    <div class="col-md-6">
        <label>PDF на Англ:</label>
        {!! Form::file('pdf_en', ['class' => 'form-control']) !!}
        {{$publication->translate('en')->pdf}}
    </div>
    <div class="col-md-6">
        <label>Дата публикации:</label>
        <input type="text" value="{{Date::parse($publication->created_at)->format('d-m-Y')}}" name="created_at" class="date-picker-single-2 form-control" required>  
    </div>
</div>

<div class="form-group">
    <label>Руководитель:</label>
    {!! Form::select('main_expert_id', $experts, null, ['class' => 'form-select', 'data-choices' => '{"searchEnabled": true}'])  !!}
</div>
<div class="form-group">
    <label>Эксперты:</label>
    {!! Form::select('experts_id[]', $experts, null, ['class' => 'form-select', 'placeholder' => 'Выбрать экспертов', 'multiple aria-label' =>'multiple select', 'data-choices' => '{"searchEnabled": true}'])  !!}
</div>
<div class="form-group">
    <label>Теги:</label>
    {!! Form::select('tags_id[]', $tags, null, ['class' => 'form-select', 'placeholder' => 'Выбрать теги', 'multiple aria-label' =>'multiple select', 'data-choices' => '{"searchEnabled": true}'])  !!}
</div>
<div class="form-group">
    <label>Повестка:</label>
    {!! Form::select('agenda_id', $agendas, null, ['class' => 'form-select', 'placeholder' => 'Выбрать...', 'data-choices' => '{"searchEnabled": true}'])  !!}
</div>
<div class="form-group">
    <label>Тип публикации:</label>
    {!! Form::select('publication_type_id', $publication_types, null, ['class' => 'form-select', 'data-choices' => '{"searchEnabled": true}'])  !!}
</div>

<div class="form-group">
    <a class="btn btn-default pull-right" href="{{ route('admin.publications.index') }}">Назад</a>
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>

<script>
    $('.date-picker-single-2').daterangepicker({
        singleDatePicker: true,
        autoApply: true,
        locale: {
            format: 'DD-MM-YYYY'
        }
    });
</script>