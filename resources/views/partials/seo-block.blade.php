<div class="panel panel-default">
    <div class="panel-heading">SEO</div>
    <div class="panel-body form-horizontal">

        <ul class="nav nav-tabs card-header-tabs mt-1 mb-1" id="seo-l10n" role="tablist">
            @foreach (config('app.content_locales') as $locale)
                <li class="nav-item" role="presentation">
                    <a class="nav-link text-uppercase" data-bs-toggle="tab" data-bs-target="#seo-loc-{{ $locale  }}"
                       role="tab" aria-controls="seo-loc-{{ $locale  }}" aria-selected="false">&nbsp;{{ $locale }}
                        &nbsp;</a>
                </li>
            @endforeach
        </ul>

        <div class="tab-content">
            @foreach (config('translatable.locales') as $locale)
                <div class="tab-pane" id="seo-loc-{{ $locale }}">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Title:</label>
                        <div class="col-sm-10">
                            {!! Form::text($locale.'[meta_title]', $item->translate($locale)->meta_title,
                             array('class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Keywords:</label>
                        <div class="col-sm-10">
                            {!! Form::text($locale.'[meta_keywords]', $item->translate($locale)->meta_keywords,
                             array('class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Description:</label>
                        <div class="col-sm-10">
                            {!! Form::text($locale.'[meta_description]', $item->translate($locale)->meta_description,
                             array('class' => 'form-control')) !!}
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</div>
