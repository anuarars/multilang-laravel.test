<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::text('name', $item->name,
                     array('class' => 'form-control', 'placeholder' => 'ФИО')) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::email('email', $item->email,
                     array('class' => 'form-control', 'placeholder' => 'Email')) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::text('phone', $item->phone,
                     array('class' => 'form-control', 'placeholder' => 'Телефон')) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::text('occupation', $item->occupation,
                     array('class' => 'form-control', 'placeholder' => 'Должность')) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::text('book', $item->book,
                     array('class' => 'form-control', 'placeholder' => 'Название')) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::text('author', $item->author,
                     array('class' => 'form-control', 'placeholder' => 'Автор')) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::text('link', $item->link,
                     array('class' => 'form-control', 'placeholder' => 'Ссылка')) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::text('year', $item->year,
                     array('class' => 'form-control', 'placeholder' => 'Год')) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <a class="btn btn-default pull-right" href="{{ route('admin.experts.index') }}">Назад</a>

    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>