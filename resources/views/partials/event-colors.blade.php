<style>
@foreach($colors as $id => $color)
    .events-type-{{$id}} {
        background: {{ $color }};
        color: #fff;
        border-radius: 20px;;
        font-weight: bold;
    }
    .events-type-bg-{{$id}} {
        background: {{ $color }};
        color: #fff;
    }
@endforeach
</style>
