@extends('layouts.admin')

@section('content')

    <div class="col-auto mt-2 mb-2">
        <a class="btn btn-primary ms-2" href="{{ route('admin.events.create') }}">Создать Мероприятие</a>
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
                                <a class="list-sort text-muted" data-sort="item-name" href="#">Название</a>
                            </th>
                            <th>Дата</th>
                            <th>
                                <a class="list-sort text-muted" href="#">Действие</a>
                            </th>
                            <th>
                                <a class="list-sort text-muted" href="#">Регистрации</a>
                            </th>
                            <th>В топ?</th>
                        </tr>
                        </thead>
                        <tbody class="list fs-base">
                        @foreach ($events as $event)
                            <tr>
                                <td>{{ $event->id }}</td>
                                <td>
                                    {{Str::limit($event->translate('ru')->title, 40)}}
                                </td>
                                <td>{{ Date::parse(explode('-', $event->datetimes)[0])->locale('ru')->format('d M Y') }}</td>
                                <td class="text-end">
                                    <!-- Dropdown -->
                                    <div class="dropdown text-center">
                                        <a class="dropdown-ellipses dropdown-toggle" href="#" role="button"
                                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{ route('events.show', ['locale' => 'ru', $event->id]) }}"
                                               target="_blank">Посмотреть
                                            </a>
                                            <a href="{{ route('admin.events.edit', $event->id) }}" class="dropdown-item">
                                                Изменить
                                            </a>
                                            {!! Form::open([
                                        'method' => 'DELETE',
                                        'route' => ['admin.events.destroy', $event->id],
                                        'style' => 'display:inline',
                                        ]) !!}
                                            {!! Form::submit('Удалить', [
                                                'class' => 'dropdown-item',
                                                'onclick' => "return confirm('Точно удалить?');"
                                                ]) !!}
                                            {!! Form::close() !!}
                                            <a class="dropdown-item" href="{{ route('admin.events.export', $event->id) }}"
                                               target="_blank">Экспорт</a>
                                            <button name="summary" data-id="{{ $event->id }}" class="dropdown-item">
                                                Отправить отбивку
                                                с итогами
                                            </button>
                                        </div>
                                    </div>
                                </td>

                                <td class="text-end">
                                    <div class="dropdown text-center">
                                        <a class="dropdown-ellipses dropdown-toggle" href="#" role="button"
                                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item"
                                               href="{{ route('event-regs.admin-declined', $event->id) }}"
                                               target="_blank">
                                                Отказы администрации
                                            </a>
                                            <a href="/"
                                               class="dropdown-item">
                                                Отказы участников
                                            </a>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <input type="checkbox" class="is_main" item-id="{{$event->id}}" name="is_main" 
                                    @if ($event->is_main == 1)
                                        checked
                                    @endif>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {!! $events->links('vendor.pagination.dashkit') !!}
    </div>

    <script>
        $('button[name="summary"]').on("click", (e) => {
            e.preventDefault();

            let id = $(e.target).data('id')
            $(document).ready(() => {
                $.ajax({
                    url: "/admin/events/" + id + '/send-summary',
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    },
                    data:
                        {
                            id: id,
                            _token: "{{ csrf_token() }}",
                            method: 'POST'
                        },
                    datatype: "json"
                }).done((e) => {
                    $("[data-id=" + id + "]").prop('disabled', true)
                });
            })
        });


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".is_main").click(function(){
            var item_id = $(this).attr("item-id");
            var is_checked = $(this).is(':checked');
            var entity = 'event';

            if(is_checked == true){
                var value = 1;
            }
            if(is_checked == false){
                var value = 0;
            }

            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}",
                },
                url: "/admin/is_main",
                data: {item_id: item_id, value: value, entity: entity},
                datatype: "json",
                cache: false,
                success: function(data){
                    console.log(data);
                }
            });
        });
    </script>
@endsection
