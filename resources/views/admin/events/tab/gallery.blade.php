<div id="event-gallery" class="mb-4">
    <label>Галерея:</label>
    {!! Form::file('gallery[]', ['multiple' => 'multiple', 'class' => 'form-control']) !!}
</div>
<div class="row">
    @foreach (\App\Models\EventGallery::where('event_id', $item->id)->get() as $image)
        <div class="col-md-3">
            <img src="{{$image->url}}" alt="" class="img-responsive w-100">
        </div>
    @endforeach
</div>