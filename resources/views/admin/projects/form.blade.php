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
                selector: '#editor-terms-{{$locale}}',
                language: 'ru',
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
                selector: '#editor-cont-{{$locale}}',
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
                {!! Form::text($locale.'[name]', $item->translate($locale)->name,
                 array('class' => 'form-control', 'required' => true)) !!}
            </div>
            <div class="form-group">
                <label>Общая информация:</label>
                {!! Form::textarea($locale.'[description]', $item->translate($locale)->description,
                 array('class' => 'editor', 'id' => 'editor-descs-'.$locale, 'required' => true)) !!}
            </div>
            <div class="form-group">
                <label>Условия участия:</label>
                {!! Form::textarea($locale.'[terms]', $item->translate($locale)->terms,
                 array('class' => 'editor', 'id' => 'editor-terms-'.$locale)) !!}
            </div>
            <div class="form-group">
                <label>Контакты:</label>
                {!! Form::textarea($locale.'[contacts]', $item->translate($locale)->contacts,
                 array('class' => 'editor', 'id' => 'editor-cont-'.$locale)) !!}
            </div>
        </div>
    @endforeach
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label class="form-label">Размер Премии</label>
            {!! Form::text('award', $item->award, array('class' => 'form-control', 'required' => true)) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="form-label">Логотип:</label>
            {!! Form::file('logo', ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="formDate" class="form-label">Дата и время начала</label>
            <input class="form-control" type="text" name="datetimes"/>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="formDate" class="form-label">Announcement competition</label>
            <input class="form-control" type="text" value="{{Date::parse($item->announcement_competition)->format('Y-m-d')}}" required name="announcement_competition" id="date_competition"/>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="formDate" class="form-label">Announcement result</label>
            <input class="form-control" type="text" value="{{Date::parse($item->announcement_result)->format('Y-m-d')}}" required name="announcement_result" id="date_result"/>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Консультативный совет и Администрация | Совет Премии:</label>
            {!! Form::select('council_experts_id[]', $experts, null, ['class' => 'form-select', 'multiple aria-label' =>'multiple select', 'data-choices' => '{"searchEnabled": true}'])  !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Эксперты:</label>
            {!! Form::select('experts_id[]', $experts, null, ['class' => 'form-select', 'multiple aria-label' =>'multiple select', 'data-choices' => '{"searchEnabled": true}'])  !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Повестка:</label>
            {!! Form::select('agenda_id', $agenda, null, ['class' => 'form-select', 'data-choices' => '{"searchEnabled": true}'])  !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Администрация:</label>
            {!! Form::select('team_id[]', $team, null, ['class' => 'form-select', 'multiple aria-label' =>'multiple select', 'data-choices' => '{"searchEnabled": true}'])  !!}
        </div>
    </div>
</div>

<div class="form-group">
    <a class="btn btn-default pull-right" href="{{ route('admin.projects.index') }}">Назад</a>
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>

<script>
    var date_start = "{{ Date::parse(explode('-', $item->datetimes)[0])->format('Y-m-d') }}"
    var time_start =  "{{ Date::parse(explode('-', $item->datetimes)[0])->format('H:i') }}"
    var date_end = "{{ Date::parse(explode('-', $item->datetimes)[1])->format('Y-m-d') }}"
    var time_end =  "{{ Date::parse(explode('-', $item->datetimes)[1])->format('H:i') }}"

    $('input[name="datetimes"]').daterangepicker({
        timePicker: true,
        startDate: moment(date_start + ' ' + time_start),
        endDate: moment(date_end + ' ' + time_end),
        timePicker24Hour: true,
        locale: {
            format: 'YYYY/MM/DD H:mm'
        }
    });

    $('#date_competition').daterangepicker({
        singleDatePicker: true,
        autoApply: true,
        locale: {
            format: 'YYYY-MM-DD'
        }
    });

    $('#date_result').daterangepicker({
        singleDatePicker: true,
        autoApply: true,
        locale: {
            format: 'YYYY-MM-DD'
        }
    });
</script>