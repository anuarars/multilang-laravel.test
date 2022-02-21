@extends('layouts.admin')

@section('content')

    <div class="col-auto mt-2 mb-2">
        <a class="btn btn-primary ms-2" href="{{ route('admin.pages.create') }}">Создать страницу</a>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="contactsListPane" role="tabpanel" aria-labelledby="contactsListTab">
            <!-- Card -->
            <div class="card" data-list='{"valueNames": ["item-name", "item-path", "item-active"]}' id="contactsList">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <form>
                                <div class="input-group input-group-flush input-group-merge input-group-reverse">
                                    <input class="form-control list-search" type="search" placeholder="Поиск">
                                    <span class="input-group-text">
                              <i class="fe fe-search"></i>
                            </span>
                                </div>
                            </form>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="table-responsive">
                    <table class="table table-sm table-hover table-nowrap card-table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>
                                <a class="list-sort text-muted" data-sort="item-name" href="#">Заголовок</a>
                            </th>
                            <th>
                                <a class="list-sort text-muted" data-sort="item-path" href="#">Путь</a>
                            </th>
                            <th colspan="2">
                                <a class="list-sort text-muted" data-sort="item-active" href="#">Активно</a>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="list fs-base">
                        @foreach ($pages as $page)
                            <?php $level = substr_count($page->path, '/'); ?>
                            <tr>
                                <td>{{ $page->id }}</td>
                                <td>
                                    <span class="item-title">{{ $page->title }}</span>
                                </td>
                                <td>
                                    <a href="{{ route('admin.pages.show', $page->path) }}" target="_blank">
                                        /{{ $page->path }}
                                    </a>
                                </td>
                                <td>{{ $page->status ? 'Да' : 'Нет' }}</td>
                                <td class="text-end">
                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a class="dropdown-ellipses dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="{{ route('admin.pages.edit', $page->id) }}" class="dropdown-item">
                                                Изменить
                                            </a>
                                            <a href="{{ route('admin.pages.show', $page->id) }}" class="dropdown-item">
                                                Посмотреть
                                            </a>
                                            {!! Form::open([
                                        'method' => 'DELETE',
                                        'route' => ['admin.pages.destroy', $page->id],
                                        'style' => 'display:inline']) !!}
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
                        </tbody>
                    </table>
                </div>
                {!! $pages->links('vendor.pagination.dashkit') !!}
            </div>
        </div>
    </div>
@endsection
