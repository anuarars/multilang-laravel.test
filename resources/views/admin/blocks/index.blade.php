@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Блоки</h2>

    <form action="{{route('admin.blocks.store')}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Название</label>
            <input type="text" name="name" placeholder="Название" class="form-control">
        </div>
        <div class="form-group">
            <label>Модель</label>
            <select name="model" class="form-control">
                <option value="Publication">Publication</option>
                <option value="Event">Event</option>
                <option value="News">News</option>
            </select>
        </div>
        <div class="form-group">
            <label>Теги</label>
            <select name="tag_id" class="form-control">
                <option value="" selected>Не выбран</option>
                @foreach ($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Expert</label>
            <select name="expert_id" class="form-control">
                <option value="" selected>Не выбран</option>
                @foreach ($experts as $expert)
                    <option value="{{$expert->id}}">{{$expert->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Agenda</label>
            <select name="agenda_id" class="form-control">
                <option value="" selected>Не выбран</option>
                @foreach ($agendas as $agenda)
                    <option value="{{$agenda->id}}">{{$agenda->name}}</option>
                @endforeach
            </select>
        </div>
    
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
    </form>

    <div class="card">
        <div class="card-body">
            <table class="table table-sm table-hover table-responsive-lg">
                <tr>
                    <th style="width: 1%">#</th>
                    <th>Название</th>
                    <th>Модель</th>
                    <th>Эксперт</th>
                    <th>Тег</th>
                    <th>Повестка</th>
                    <th>Статус</th>
                    <th style="width: 300px">Действие</th>
                </tr>
                @foreach ($blocks as $block)
                    <tr>
                        <td>{{ $block->id }}</td>
                        <td>{{ $block->name }}</td>
                        <td>{{ $block->model }}</td>
                        <td>
                            @if ($block->expert_id != null)
                                {{ \App\Models\Expert::where('id', $block->expert_id)->first()->name }}
                            @endif
                        </td>
                        <td>
                            @if ($block->tag_id != null)
                                {{ \App\Models\Tag::where('id', $block->tag_id)->first()->name }}
                            @endif
                        </td>
                        <td>
                            @if ($block->agenda_id != null)
                                {{ \App\Models\Agenda::where('id', $block->agenda_id)->first()->name }}
                            @endif
                        </td>
                        <td>{{ $block->is_active ? "Активный" : "Неактивный"}}</td>
                        <td class="text-end">
                            <!-- Dropdown -->
                            <div class="dropdown text-center">
                                <a class="dropdown-ellipses dropdown-toggle" href="#" role="button"
                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    {!! Form::open([
                                'method' => 'DELETE',
                                'route' => ['admin.blocks.destroy', $block->id],
                                'style' => 'display:inline',
                                ]) !!}
                                    {!! Form::submit('Удалить', [
                                        'class' => 'dropdown-item',
                                        'onclick' => "return confirm('Точно удалить?');"
                                        ]) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection