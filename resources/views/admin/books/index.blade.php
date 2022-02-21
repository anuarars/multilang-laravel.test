@extends('layouts.admin')

@section('content')

    <div class="col-auto mt-2 mb-2">
        <a class="btn btn-primary ms-2" href="{{ route('admin.books.create') }}">Добавить книгу</a>
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
                            <th> <a class="list-sort text-muted" data-sort="item-name" href="#">Имя</a></th>
                            <th> <a class="list-sort text-muted" data-sort="item-name" href="#">Email</a></th>
                            {{-- <th>Телефон</th> --}}
                            {{-- <th>Род деятельности</th> --}}
                            <th><a class="list-sort text-muted" data-sort="item-name" href="#">Название</a></th>
                            {{-- <th>Ссылка</th> --}}
                            <th><a class="list-sort text-muted" data-sort="item-name" href="#">Автор</a></th>
                            <th><a class="list-sort text-muted" data-sort="item-name" href="#">Год издания</a></th>
                            <th><a class="list-sort text-muted" data-sort="item-name" href="#">Дата</a></th>
                            <th><a class="list-sort text-muted" data-sort="item-name" href="#">Действие</a></th>
                        </tr>
                        </thead>
                        <tbody class="list fs-base">
                            @foreach ($books as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                {{-- <td>{{ $item->phone }}</td> --}}
                                {{-- <td>{{ $item->occupation }}</td> --}}
                                <td>{{ $item->book }}</td>
                                {{-- <td>{{ $item->link }}</td> --}}
                                <td>{{ $item->author }}</td>
                                <td>{{ $item->year }}</td>
                                <td style="white-space: nowrap;">
                                    {{ $item->created_at->format('d.m.Y') }}
                                </td>
                                <td class="text-end">
                                    <!-- Dropdown -->
                                    <div class="dropdown text-center">
                                        <a class="dropdown-ellipses dropdown-toggle" href="#" role="button"
                                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="{{ route('admin.books.edit', $item->id) }}" class="dropdown-item">
                                                Изменить
                                            </a>
                                            {!! Form::open([
                                        'method' => 'DELETE',
                                        'route' => ['admin.books.destroy', $item->id],
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
        {!! $books->links('vendor.pagination.dashkit') !!}
    </div>
@endsection