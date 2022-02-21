@extends('layouts.admin')

@section('content')

    <div class="reminders-flash"></div>

    <h2 class="page-title">Читательские билеты</h2>

    <div class="card">
        <div class="card-body">
            <table class="table table-responsive-lg">
                <tr>
                    <th style="width: 1%">#</th>
                    <th>ФИО</th>
                    <th>Номер билета</th>
                    {{-- <th>Род деятельности</th> --}}
                    <th>Место работы/учебы</th>
                    <th>Электронная почта</th>
                    <th>Телефон</th>
                    <th style="width: 120px">Действие</th>
                </tr>
                @foreach ($regs as $reg)
                    <tr>
                        <td>{{ $reg->id }}</td>
                        <td>{{ $reg->surname }} {{ $reg->name }}</td>
                        <td>{{ $reg->ticket }}</td>
                        <td>{{ $reg->occupation }}</td>
                        {{-- <td>{{ $reg->position }}</td> --}}
                        <td>{{ $reg->email }}</td>
                        <td>{{ $reg->phone }}</td>
                        <td>

                            {!! Form::open([
                            'method' => 'DELETE',
                            'route' => ['admin.library-tickets.destroy', $reg->id],
                            'style' => 'display:inline']) !!}
                            {!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
