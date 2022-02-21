@extends('layouts.admin')

@section('content')

    <div class="reminders-flash"></div>

    <h2 class="page-title">Заявки на посещение</h2>

    <div class="card">
        <div class="card-body">
            <table class="table table-responsive-lg">
                <tr>
                    <th style="width: 1%">#</th>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Номер билета</th>
                    <th>Дата посещения</th>
                    <th>Время посещения</th>
                    <th>Какие книги подготовить</th>
                    <th>Дата и время заявки</th>
                    <th style="width: 120px">Подтвердить заявку</th>
                </tr>
                <tr>
                    <td></td>
                    <td><input form="filter" type="text" class="form-control" name="name"></td>
                    <td><input form="filter" type="text" class="form-control" name="surname"></td>
                    <td><input form="filter" type="text" class="form-control" name="ticket"></td>
                    <td><input form="filter" type="text" class="form-control" name="date_visit"></td>
                    <td><input form="filter" type="text" class="form-control" name="time_visit"></td>
                    <td><input form="filter" type="text" class="form-control" name="books"></td>
                    <td>
                    </td>
                    <td>
                    </td>
                </tr>
                @foreach ($regs as $reg)
                    <tr>
                        <td>{{ $reg->id }}</td>
                        <td>{{ $reg->name }}</td>
                        <td>{{ $reg->surname }}</td>
                        <td>{{ $reg->ticket }}</td>
                        <td>{{ $reg->date_visit }}</td>
                        <td>{{ $reg->time_visit }}</td>
                        <td>{{ $reg->books }}</td>
                        <td>
                            {{ $reg->created_at  }}
                        </td>
                        <td>
                            {!! Form::open([
        'method' => 'POST',
        'route' => ['admin.library-regs.confirm', $reg->id],
        'style' => 'display:inline']) !!}
                            <input type="button" name="confirmed" data-id="{{ $reg->id }}" class="btn btn-sm btn-primary"
                                   value="Да">
                            {!! Form::close() !!}
                            @if ($reg->confirmed != 1)
                                {!! Form::open([
                                    'method' => 'POST',
                                    'route' => ['admin.library-regs.confirm', $reg->id],
                                    'style' => 'display:inline']) !!}
                                <input type="button" name="confirmed" data-id="{{ $reg->id }}" class="btn btn-sm btn-primary"
                                       value="Да">
                                {!! Form::close() !!}
                            @else
                                Да
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <script>
        $(document).ready(() => {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('input[name="confirmed"]').on("click", (e) => {
                e.preventDefault();

                let id = $(e.target).data('id')
                $(document).ready(() => {
                    $.ajax({
                        url: "/admin/library/" + id + '/confirm',
                        type: "POST",
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}",
                        },
                        data:
                            {
                                confirmed: $(e.target).val(),
                                _token: "{{ csrf_token() }}",
                                method: 'POST'
                            },
                        datatype: "json"
                    }).done((e) => {
                        console.log('#confirmed_' + id)
                        $('#confirmed_' + id).html(e.confirmed)
                    });
                })
            })
        });
    </script>
@endsection
