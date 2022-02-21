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
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>ФИО:</label>
                        {!! Form::text($locale.'[name]', $team->translate($locale)->name,
                         array('class' => 'form-control', 'required' => true)) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Должность:</label>
                        {!! Form::text($locale.'[jobTitle]', $team->translate($locale)->jobTitle,
                         array('class' => 'form-control')) !!}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label>Фото:</label>
            {!! Form::file('image', ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Email:</label>
            {!! Form::email('email', $value = null, $attributes = ['class' => 'form-control', 'required' => true]) !!}
        </div>
    </div>
    <div class="col-md-4">
       <div class="form-group">
            <label>Порядок</label>
            {!! Form::number('position',$value = null, $attributes = ['class' => 'form-control', 'required' => true] ) !!}
       </div>
    </div>
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


<div class="form-group mt-2">
    <a class="btn btn-default pull-right" href="{{ route('admin.teams.index') }}">Назад</a>
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>
