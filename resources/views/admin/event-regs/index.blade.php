@extends('layouts.admin')

@section('content')
<div class="col-auto mt-2 mb-2">
    <a class="btn btn-primary ms-2" href="{{ route('admin.event-regs.create') }}">Регистрация</a>
</div>
<div class="tab-content">
    <div class="tab-pane fade show active" id="contactsListPane" role="tabpanel" aria-labelledby="contactsListTab">
        <div class="card"
             data-list='{"valueNames": ["item-id", "item-name", "item-date"]}'>
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
                        <th><a class="list-sort text-muted" data-sort="item-id" href="#">#</a></th>
                        <th>
                            <a class="list-sort text-muted" data-sort="item-name" href="#">Имя</a>
                        </th>
                        <th>
                            <a class="list-sort text-muted" data-sort="item-date" href="#">Фамилия</a>
                        </th>
                        <th>
                            <a class="list-sort text-muted" data-sort="item-name" href="#">Email</a>
                        </th>
                        <th>
                            <a class="list-sort text-muted" data-sort="item-name" href="#">Телефон</a>
                        </th>
                        <th>
                            <a class="list-sort text-muted" data-sort="item-date" href="#">Организация</a>
                        </th>
                        <th>
                            <a class="list-sort text-muted" href="#">Действие</a>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="list fs-base">
                    @foreach ($regs as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td style="white-space: nowrap;">{{ $item->name }}
                            </td>
                            <td>{{ $item->surname }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->organization }}</td>
                            <td class="text-end">
                                <!-- Dropdown -->
                                <div class="dropdown text-center">
                                    <a class="dropdown-ellipses dropdown-toggle" href="#" role="button"
                                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fe fe-more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="{{ route('admin.event-regs.edit', $item->id) }}" class="dropdown-item">
                                            Изменить
                                        </a>
                                        {!! Form::open([
                                    'method' => 'DELETE',
                                    'route' => ['admin.event-regs.destroy', $item->id],
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {!! $regs->links('vendor.pagination.dashkit') !!}
</div>
@endsection