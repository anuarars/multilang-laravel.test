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
            selector: '#editor-desc{{$locale}}',
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
                {!! Form::text($locale.'[title]', $item->translate($locale)->title,
                 array('class' => 'form-control', 'required' => true)) !!}
            </div>
            <div class="form-group">
                <label>Текст:</label>
                {!! Form::textarea($locale.'[content]', $item->translate($locale)->content,
                 array('class' => 'mini-editor', 'id' => 'editor-desc'.$locale)) !!}
            </div>
        </div>
    @endforeach
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Обложка:</label>
            {!! Form::file('image', ['class' => 'form-control']) !!}
            <img src="{{$item->image}}" alt="{{$item->image}}" class="w-100">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Дата публикации:</label>
            <input type="text" value="{{Date::parse($item->created_at)->format('d-m-Y')}}" name="created_at" class="date-picker-single-2 form-control" required>  
            {{-- {!! Form::text('date', Carbon\Carbon::parse($item->date)->format('d.m.Y'),
             ['class' => 'form-control "date-picker-single-2', 'required' => true]) !!} --}}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <div class="form-group">
                <label>Ссылка на сторонний ресурс:</label>
                {!! Form::text('link', $item->link, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Повестка: <span class="glyphicon glyphicon-info-sign"></span></label>
            {!! Form::select('agenda_id', $agendas, null, ['class' => 'form-select', 'placeholder' => 'Выбрать повестку', 'data-choices' => '{"searchEnabled": true}'])  !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Тэги: <span class="glyphicon glyphicon-info-sign"></span></label>
            {!! Form::select('tags_id[]', $tags, null, ['class' => 'form-select', 'multiple aria-label' =>'multiple select', 'data-choices' => '{"searchEnabled": true}'])  !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Эксперты: <span class="glyphicon glyphicon-info-sign"></span></label>
            {!! Form::select('experts_id[]', $experts, null, ['class' => 'form-select', 'multiple aria-label' =>'multiple select', 'data-choices' => '{"searchEnabled": true}'])  !!}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <a class="btn btn-warning pull-right" href="{{ route('admin.news.index') }}">Назад</a>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </div>
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