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
        selector: '#editor-short-{{$locale}}',
        language: 'ru',
        forced_root_block : "",
        height : "480",
        plugins: [
        "advlist autolink lists link image charmap print anchor",
        "searchreplace visualblocks code fullscreen media example help",
        ],
        toolbar: 'example | help'
        });
    </script>
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
        forced_root_block : "",
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
                {!! Form::text($locale.'[name]', $item->translate($locale)->name,
                 array('class' => 'form-control', 'required' => true)) !!}
            </div>
            <div class="form-group">
                <label>Краткое описание:</label>
                {!! Form::textarea($locale.'[short_description]', $item->translate($locale)->short_description,
                 array('class' => 'form-control', 'rows' => 5, 'id' => 'editor-short-'.$locale)) !!}
            </div>
            <div class="form-group">
                <label>Контент:</label>
                {!! Form::textarea($locale.'[description]', $item->translate($locale)->description,
                 array('class' => 'editor', 'id' => 'editor-'.$locale)) !!}
            </div>

        </div>
    @endforeach
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>Изображение:</label>
        {!! Form::file('image', ['class' => 'form-control']) !!}
    </div>
    @if ($item->image)
        <img src="{{$item->image}}" alt="{{$item->image}}" class="img-responsive w-100" style="height: 200px">
    @endif
</div>

<div class="form-group">
    <a class="btn btn-default pull-right" href="{{ route('admin.agendas.index') }}">Назад</a>
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>
