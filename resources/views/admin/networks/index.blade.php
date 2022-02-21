@extends('layouts.admin')

@section('content')

    <h2 class="page-title">Соц Сети</h2>

    <form action="{{route('admin.networks.store')}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Youtube:</label>
            <input type="text" class="form-control" name="youtube" placeholder="Ссылка на youtube" value="{{$networks->youtube ?? ""}}">
        </div>
    
        <div class="form-group">
            <label>Facebook:</label>
            <input type="text" class="form-control" name="facebook" placeholder="Ссылка на facebook" value="{{$networks->facebook ?? ""}}">
        </div>
    
        <div class="form-group">
            <label>Instagram:</label>
            <input type="text" class="form-control" name="instagram" placeholder="Ссылка на instagram" value="{{$networks->instagram ?? ""}}">
        </div>
    
        <div class="form-group">
            <label>linkedin:</label>
            <input type="text" class="form-control" name="linkedin" placeholder="Ссылка на linkedin" value="{{$networks->linkedin ?? ""}}">
        </div>
    
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </form>

@endsection