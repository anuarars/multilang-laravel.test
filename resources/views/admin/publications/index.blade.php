@extends('layouts.admin')

@section('content')

    <div class="col-auto mt-2 mb-2">
        <a class="btn btn-primary ms-2" href="{{ route('admin.publications.create') }}">Добавить публикацию</a>
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
                            <th>
                                <a class="list-sort text-muted" data-sort="item-title" href="#">Публикация</a>
                            </th>
                            <th>Дата</th>
                            <th>Действие</th>
                            <th>В топ?</th>
                        </tr>
                        </thead>
                        <tbody class="list fs-base">
                        @foreach ($publications as $publication)

                            <tr>
                                <td>{{ $publication->id }}</td>
                                <td>
                                    <span class="item-title">{{ Str::words($publication->translate('ru')->title, 5) }}</span>
                                </td>
                                <td>{{ Date::parse($publication->created_at)->locale('ru')->format('d M Y') }}</td>
                                <td class="text-end">
                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a class="dropdown-ellipses dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="{{ route('admin.publications.edit', $publication->id) }}" class="dropdown-item">
                                                Изменить
                                            </a>
                                            <a href="{{route('publications.show', ['locale' => 'ru', $publication->id])}}" class="dropdown-item" target="_blank">
                                                Посмотреть
                                            </a>
                                            {!! Form::open([
                                        'method' => 'DELETE',
                                        'route' => ['admin.publications.destroy', $publication->id],
                                        'style' => 'display:inline']) !!}
                                            {!! Form::submit('Удалить', [
                                                'class' => 'dropdown-item',
                                                'onclick' => "return confirm('Точно удалить?');"
                                                ]) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <input type="checkbox" class="is_main" item-id="{{$publication->id}}" name="is_main" 
                                    @if ($publication->is_main == 1)
                                        checked
                                    @endif>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                {!! $publications->links('vendor.pagination.dashkit') !!}
            </div>
        </div>
    </div>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".is_main").click(function(){
            var item_id = $(this).attr("item-id");
            var is_checked = $(this).is(':checked');
            var entity = 'publication';

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
