<ul class="nav nav-tabs card-header-tabs mb-3" id="main-tabs" role="tablist">
    <li class="nav-item"><a class="nav-link" href="#main-basic" data-bs-toggle="tab">Основное</a></li>
    <li class="nav-item"><a class="nav-link" href="#main-gallery" data-bs-toggle="tab">Галерея</a></li>
    <li class="nav-item"><a class="nav-link" href="#main-seo" data-bs-toggle="tab">SEO</a></li>
</ul>


<div class="tab-content">
    <div class="tab-pane" id="main-basic">

        @include('admin.events.tab.basic')

    </div>

    <div class="tab-pane" id="main-gallery">

        @include('admin.events.tab.gallery')

    </div>
    <div class="tab-pane" id="main-seo">

        @include('partials.seo-block')

    </div>
</div>


<div class="form-group">
    <a class="btn btn-default pull-right" href="{{ route('admin.events.index') }}">Назад</a>

    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>
