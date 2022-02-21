<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label>Адрес страницы:</label>
            {!! Form::text('path', null, array('class' => 'form-control', 'required' => true)) !!}
        </div>
    </div>
{{--    <div class="col-sm-3">--}}
{{--        <div class="form-group">--}}
{{--            <label>Макет: <span class="glyphicon glyphicon-info-sign"--}}
{{--                                title="Файлы макетов лежат в&#10;resources/views/pages/layout"></span></label>--}}
{{--            {!! Form::select('layout', $layouts, null, array('class' => 'form-select', 'data-choices' => '{"searchEnabled": true}'))  !!}--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="col-sm-3">
        <div class="form-group">
            <br>
            <div class="checkbox">
                <label>{!! Form::checkbox('status', 1, $item->status) !!} Страница активна</label>
            </div>
        </div>
    </div>
</div>

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
        selector: '#editor-{{$locale}}',
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
                <label>Заголовок:</label>
                {!! Form::text($locale.'[title]', $item->translate($locale)->title,
                 array('class' => 'form-control', 'required' => true)) !!}
            </div>
            <div class="form-group">
                <label>Содержимое:</label>
                {!! Form::textarea($locale.'[content]', $item->translate($locale)->content,
                 array('class' => 'editor', 'id' => 'editor-'.$locale)) !!}
            </div>

        </div>
    @endforeach
</div>

{{-- @include('partials.page-optional', ['page_id' => $item->id]) --}}
@include('partials.seo-block')


<div class="form-group">
    <a class="btn btn-default pull-right" href="{{ route('admin.pages.index') }}">Назад</a>

    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>
