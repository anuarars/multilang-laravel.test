@extends('layouts.admin')

@section('content')

    <div class="col-auto mt-2 mb-2">
        <a class="btn btn-primary ms-2" href="{{ route('admin.news.create') }}">Создать новость</a>
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
                            <th>Название</th>
                            <th>Дата</th>
                            <th style="width: 300px">Действие</th>
                            <th>В топ?</th>
                        </tr>
                        </thead>
                        <tbody class="list fs-base">
                            @foreach ($news as $item)
                            <tr style="color:{{ $item->show_as_main ? 'red' : ($item->show_on_promo ? 'green' : '')}}">
                                <td>{{ $item->id }}</td>
                                <td>
                                    <span class="item-title">
                                    {{Str::limit($item->translate('ru')->title , 70)}}
                                    </span>
                                </td>
                                <td style="white-space: nowrap;">
                                    {{ Date::parse($item->created_at)->format('d F Y') }}
                                </td>
                                <td class="text-end">
                                    <!-- Dropdown -->
                                    <div class="dropdown text-center">
                                        <a class="dropdown-ellipses dropdown-toggle" href="#" role="button"
                                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="{{ route('admin.news.edit', $item->id) }}" class="dropdown-item">
                                                Изменить
                                            </a>
                                            <a href="{{ route('news.show', ['locale' => 'ru', $item->id]) }}" class="dropdown-item" target="_blank">
                                                Посмотреть
                                            </a>
                                            {!! Form::open([
                                        'method' => 'DELETE',
                                        'route' => ['admin.news.destroy', $item->id],
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
                                <td>
                                    <input type="checkbox" class="is_main" item-id="{{$item->id}}" name="is_main" 
                                    @if ($item->is_main == 1)
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
    </div>
    {!! $news->links('vendor.pagination.dashkit') !!}
    <script>
         $(document).ready(() => {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(".is_main").click(function(){
                var item_id = $(this).attr("item-id");
                var is_checked = $(this).is(':checked');
                var entity = 'news';

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
        });
    </script>
@endsection
