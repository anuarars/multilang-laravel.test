@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Редактирование отбивки</h2>

    {!! Form::model($item, ['method' => 'PATCH', 'route' => ['admin.emails.update', $item->id]]) !!}

        <div class="form-group">
            <label>RU текст:</label>
            {!! Form::textarea('ru[mail_text]', $item->translate('ru')->mail_text,
             ['class' => 'mini-editor', 'id' => 'mail_text_ru', 'rows' => '30']) !!}
        </div>

        <div class="form-group">
            <label>EN текст:</label>
            {!! Form::textarea('en[mail_text]', $item->translate('en')->mail_text,
             ['class' => 'mini-editor', 'id' => 'mail_text_en']) !!}
        </div>

        <div class="form-group">
            <a class="btn btn-default pull-right" href="{{ route('admin') }}">Назад</a>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>

    {!! Form::close() !!}

    <script>
        $(document).ready(function () {

            CKEDITOR.plugins.addExternal('codemirror', '/js/codemirror/');

            $('.editor').each(function (e) {
                CKEDITOR.replace(this.id, {
                    allowedContent: true,
                    extraPlugins: 'codemirror',
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


@endsection
