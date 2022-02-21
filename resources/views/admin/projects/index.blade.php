@extends('layouts.admin')

@section('content')

    <div class="col-auto mb-2 mt-2">
        <a class="btn btn-primary ms-2" href="{{ route('admin.projects.create') }}">Добавить проект</a>
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
                            <th>#</th>
                            <th colspan="2">
                                <a class="list-sort text-muted" data-sort="item-title" href="#">Проект</a>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="list fs-base">
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td>
                                    <span class="item-title">{{ $project->translate('ru')->name  }} / {{ $project->translate('en')->name }}</span>
                                </td>
                                <td class="text-end">
                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a class="dropdown-ellipses dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="{{ route('admin.projects.edit', $project->id) }}" class="dropdown-item">
                                                Изменить
                                            </a>
                                            {!! Form::open([
                                        'method' => 'DELETE',
                                        'route' => ['admin.projects.destroy', $project->id],
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

{{--                {!! $projects->links('vendor.pagination.dashkit') !!}--}}
            </div>
        </div>
    </div>
@endsection
