<div class="row">
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
                    <label>Заголовок:</label>
                    {!! Form::text($locale.'[title]', $item->translate($locale)->title,
                     ['class' => 'form-control', 'required' => true]) !!}
                </div>

                <div class="form-group">
                    <label>Текст:</label>
                    {!! Form::textarea($locale.'[description]', $item->translate($locale)->description,
                     ['class' => 'editor', 'id' => 'editor-desc'.$locale, 'rows' => '30']) !!}
                </div>

                <div class="form-group">
                    <label>Город:</label>
                    {!! Form::text($locale.'[city]', $item->translate($locale)->city,
                     ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    <label>Место проведения:</label>
                    {!! Form::text($locale.'[location]', $item->translate($locale)->location,
                     ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    <label>Длительность:</label>
                    {!! Form::text($locale.'[duration]', $item->translate($locale)->duration,
                     ['class' => 'form-control']) !!}
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="formFile" class="form-label">Фото</label>
            <input class="form-control" type="file" name="image">
            @if ($item->image)
                <img src="{{$item->image}}" alt="{{$item->image}}" class="img-responsive w-100" style="height: 200px">
            @endif
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="formDate" class="form-label">Дата и время начала</label>
            <input type="text" class="form-control" name="datetimes"/>
            
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label>Тип:</label>
            {!! Form::select('reg_types', $regTypes, null, ['class' => 'form-select', 'data-choices' => '{"searchEnabled": true}'])  !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label>Формат:</label>
            {!! Form::select('format_types', $formatTypes, null, ['class' => 'form-select', 'data-choices' => '{"searchEnabled": true}'])  !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label>Стоимость мероприятия:</label>
            {!! Form::select('cost_types', $costTypes, null, ['class' => 'form-select', 'data-choices' => '{"searchEnabled": true}'])  !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label>Повестка:</label>
            {!! Form::select('agenda_id', $agendas, null, ['class' => 'form-select', 'data-choices' => '{"searchEnabled": true}'])  !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label>Эксперты:</label>
            {!! Form::select('experts_id[]', $experts, null, ['class' => 'form-select', 'multiple aria-label' =>'multiple select', 'data-choices' => '{"searchEnabled": true}'])  !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label>Теги мероприятия:</label>
            {!! Form::select('tags_id[]', $tags, null, ['class' => 'form-select', 'multiple aria-label' =>'multiple select', 'data-choices' => '{"searchEnabled": true}'])  !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label>Ссылка на трансляцию:</label>
            {!! Form::url('stream', $item->stream, ['class' => 'form-control', 'required' => false]) !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label>Ссылка на сторонний ресурс:</label>
            {!! Form::url('other_link', $item->other_link, ['class' => 'form-control', 'required' => false]) !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label>Материалы:</label>
            {!! Form::file('materials[]', ['multiple' => 'multiple', 'class' => 'form-control']) !!} 
        </div>
    </div>
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

    // $('#date_competition').daterangepicker({
    //     singleDatePicker: true,
    //     autoApply: true,
    //     locale: {
    //         format: 'YYYY-MM-DD'
    //     }
    // });

    // $('#date_result').daterangepicker({
    //     singleDatePicker: true,
    //     autoApply: true,
    //     locale: {
    //         format: 'YYYY-MM-DD'
    //     }
    // });
</script>
