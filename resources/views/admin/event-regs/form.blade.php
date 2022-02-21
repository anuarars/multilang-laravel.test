<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Имя:</label>
            {!! Form::text('name', $item->name,
             ['class' => 'form-control', 'required' => true]) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Фамилия:</label>
            {!! Form::text('surname', $item->surname,
             ['class' => 'form-control', 'required' => true]) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Телефон:</label>
            {!! Form::text('phone', $item->phone,
             ['class' => 'form-control', 'required' => true]) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Email:</label>
            {!! Form::email('email', $item->email,
             ['class' => 'form-control', 'required' => true]) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Должность:</label>
            {!! Form::text('jobTitle', $item->jobTitle,
             ['class' => 'form-control', 'required' => true]) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Организация:</label>
            {!! Form::text('organization', $item->organization,
             ['class' => 'form-control', 'required' => true]) !!}
        </div>
    </div>
    <div class="col-md-6">
        <label>Файл:</label>
            {!! Form::file('file', ['class' => 'form-control']) !!}
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Мероприятие: <span class="glyphicon glyphicon-info-sign"></span></label>
            {!! Form::select('event_id', $events, null, ['class' => 'form-select', 'placeholder' => 'Выбрать мероприятие', 'data-choices' => '{"searchEnabled": true}'])  !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <a class="btn btn-warning pull-right" href="{{ route('admin.event-regs.index') }}">Назад</a>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </div>
</div>