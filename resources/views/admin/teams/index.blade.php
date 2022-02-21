@extends('layouts.admin')

@section('content')

    <div class="col-auto mt-2 mb-2">
        <a class="btn btn-primary ms-2" href="{{ route('admin.teams.create') }}">Создать сотрудника</a>
    </div>

    <div class="tab-content">
        <div class="tab-pane fade show active" id="contactsListPane" role="tabpanel" aria-labelledby="contactsListTab">
            <!-- Card -->
            <div class="card" data-list='{"valueNames": ["item-name", "item-title", "item-email"]}' id="contactsList">
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
                                <th style="width: 1%">#</th>
                                <th>ФИО</th>
                                <th>Должность</th>
                                <th>Email</th>
                                <th style="width: 300px">Действие</th>
                            </tr>
                        </thead>
                        <tbody class="list fs-base">
                            @foreach ($team as $staff)
                    <tr>
                        <td>{{ $staff->id }}</td>
                        <td>{{ $staff->name }}</td>
                        <td>{{ $staff->jobTitle }}</td>
                        <td>{{ $staff->email }}</td>
                        <td class="text-end">
                            <!-- Dropdown -->
                            <div class="dropdown text-center">
                                <a class="dropdown-ellipses dropdown-toggle" href="#" role="button"
                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{ route('admin.teams.edit', $staff->id) }}" class="dropdown-item">
                                        Изменить
                                    </a>
                                    {!! Form::open([
                                'method' => 'DELETE',
                                'route' => ['admin.teams.destroy', $staff->id],
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
    </div>
    {{-- {!! $news->links('vendor.pagination.dashkit') !!} --}}
@endsection
