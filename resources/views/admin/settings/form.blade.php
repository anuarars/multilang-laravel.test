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
                <label>Наименование типа публикации:</label>
                {!! Form::textarea($locale.'[content]', $item->translate($locale)->content,
                 array('class' => 'editor', 'id' => 'editor-descs-'.$locale, 'required' => true)) !!}
            </div>
        </div>
    @endforeach
</div>

<div class="form-group">
    <a class="btn btn-default pull-right" href="{{ route('admin.settings.index') }}">Назад</a>
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>

<script>
    $(function () {
        CKEDITOR.plugins.addExternal('codemirror', '/templates/v1/js/codemirror/');

        $('.editor').each(function (e) {
            CKEDITOR.replace(this.id, {
                allowedContent: true,
                extraPlugins: 'codemirror',
                height: 300,
                filebrowserBrowseUrl: '{{ route('elfinder.ckeditor') }}',
                codemirror: {
                    theme: 'monokai',
                    enableCodeFolding: false,
                    showCommentButton: false,
                    showUncommentButton: false
                }
            });
        });

    })
</script>