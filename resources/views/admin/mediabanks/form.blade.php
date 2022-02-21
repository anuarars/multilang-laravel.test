<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::text('description', $mediabank->description, ['class' => 'form-control', 'placeholder' => 'Описание']) !!}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>Выбрать тип:</label>
            <select name="type" id="mediatype" class="form-control">
                <option selected disabled>Выбрать тип</option>
                <option value="photo">Фото</option>
                <option value="video">Видео</option>
                <option value="link">Ссылка</option>
            </select>
        </div>
    </div>
    <div class="col-md-12 d-none" id="link">
        <div class="form-group">
            <label>Ссылка Youtube:</label>
            {!! Form::text('youtube', $mediabank->youtube, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-12 d-none" id="photo">
        <div class="form-group">
            <label>Фото:</label>
            {!! Form::file('image[]', ['multiple' => 'multiple', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-12 d-none" id="video">
        <div class="form-group">
            <label>Видео:</label>
            {!! Form::file('video[]', ['multiple' => 'multiple', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Проекты: <span class="glyphicon glyphicon-info-sign"></span></label>
            {!! Form::select('project_id', $projects, null, ['class' => 'form-select', 'placeholder' => 'Выбрать повестку', 'data-choices' => '{"searchEnabled": true}'])  !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Мероприятия: <span class="glyphicon glyphicon-info-sign"></span></label>
            {!! Form::select('event_id', $events, null, ['class' => 'form-select', 'placeholder' => 'Выбрать мероприятия', 'data-choices' => '{"searchEnabled": true}'])  !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Эксперт: <span class="glyphicon glyphicon-info-sign"></span></label>
            {!! Form::select('expert_id', $experts, null, ['class' => 'form-select', 'placeholder' => 'Выбрать эксперта', 'data-choices' => '{"searchEnabled": true}'])  !!}
        </div>
    </div>
    @if ($mediabank['events_id'] or $mediabank['projects_id'])
    <label>Медиа: <span class="glyphicon glyphicon-info-sign"></span></label>
        <div class="table-responsive">
            <table class="table table-sm table-hover table-nowrap card-table">
                <tbody class="list fs-base">
                @foreach ($mediabank->gallery as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>
                            <span>{{ $item->url}}</span>
                        </td>
                        <td>
                            <span>{{ $item->type}}</span>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif
    <div class="col-md-12">
        <div class="form-group">
            <a class="btn btn-warning pull-right" href="{{ route('admin.mediabanks.index') }}">Назад</a>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </div>
</div>

<script>
    $('#mediatype').on('change', function() {
        if(this.value == "link"){
            $('#link').removeClass('d-none');
            $('#photo').addClass('d-none');
            $('#video').addClass('d-none');
        }
        if(this.value == "photo"){
            $('#photo').removeClass('d-none');
            $('#link').addClass('d-none');
            $('#video').addClass('d-none');
        }
        if(this.value == "video"){
            $('#video').removeClass('d-none');
            $('#photo').addClass('d-none');
            $('#link').addClass('d-none');
        }
    });
</script>