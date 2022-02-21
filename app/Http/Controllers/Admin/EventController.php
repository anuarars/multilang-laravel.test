<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Agenda;
use App\Models\Tag;
use App\Models\Expert;
use App\Exports\EventRegistrationsExport;
use App\Models\EventGallery;
use App\Models\EventMaterial;
use Illuminate\Support\Facades\Date;
use App\Services\MediaService;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::latest()->paginate(20);
        return view('admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agendas = Agenda::all()->pluck('name', 'id');
        $tags = Tag::all()->pluck('name', 'id');
        $experts = Expert::all()->pluck('name', 'id');

        $gallery = [];
        $regTypes = Event::REG_TYPES;
        $formatTypes = EVENT::FORMAT_TYPES;
        $costTypes = EVENT::COST_TYPES;

        $default = array_fill_keys(config('translatable.locales'), []);

        $item = new Event($default);

        return view('admin.events.create', compact( 'item', 'gallery', 'regTypes', 'formatTypes', 'costTypes', 'agendas', 'tags', 'experts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, MediaService $mediaService)
    {
        $date_start = Date::parse(explode('-', $request->datetimes)[0]);
        $date_end = Date::parse(explode('-', $request->datetimes)[1]);

        $all = $request->all();
        $all['date_start'] = $date_start;
        $all['date_end'] = $date_end;

        if($request->image){
            $image = $mediaService->saveFile($request->image,'events_image');
            $all['image'] = $image;
        }

        $event = Event::create($all);

        if($request->experts_id){
            foreach($request->experts_id as $id){
                $event->experts()->attach($id);
            }    
        }

        if($request->tags_id){
            foreach($request->tags_id as $id){
                $event->tags()->attach($id);
            }
        }
        if ($request->gallery) {
            foreach ($request->gallery as $item){

                $url = $mediaService->saveFile($item,'events_gallery');

                EventGallery::create([
                    'event_id' => $event->id,
                    'url' => $url
                ]);
            }
        }

        if ($request->materials) {
            foreach ($request->materials as $item){

                $url = $mediaService->saveFile($item,"events_materials/$event->id");

                EventMaterial::create([
                    'event_id' => $event->id,
                    'url' => $url
                ]);
            }
        }

        return redirect()->back()
            ->with('success', 'Создано');
    }

    public function show(Event $event){
        $app_locale = 'ru';
        $events =Event::where('datetimes', '>', now())->orderBy('datetimes', 'asc')->limit(4)->get()->except($event->id);
        return view('admin.events.show', compact('event', 'events', 'app_locale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Event::findOrFail($id);

        $tags_id = [];
        $experts_id = [];

        foreach($item->tags as $tag){
            $tags_id[] = $tag->pivot->tag_id;
        }

        foreach($item->experts as $expert){
            $experts_id[] = $expert->pivot->expert_id;
        }

        $item['tags_id'] = $tags_id;
        $item['experts_id'] = $experts_id;

        $agendas = Agenda::all()->pluck('name', 'id');
        $tags = Tag::all()->pluck('name', 'id');
        $experts = Expert::all()->pluck('name', 'id');

        $gallery = $item->gallery ?: [];
        $regTypes = Event::REG_TYPES;
        $formatTypes = EVENT::FORMAT_TYPES;
        $costTypes = EVENT::COST_TYPES;

        return view('admin.events.edit', compact('item', 'gallery', 'regTypes', 'formatTypes', 'costTypes', 'agendas', 'tags', 'experts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, MediaService $mediaService)
    {
        // dd($request->all());
        $date_start = Date::parse(explode('-', $request->datetimes)[0]);
        $date_end = Date::parse(explode('-', $request->datetimes)[1]);

        $all = $request->all();

        $all['date_start'] = $date_start;
        $all['date_end'] = $date_end;

        $event = Event::find($id);

        if($request->image){
            if (file_exists($event->image)) {
                @unlink($event->image);
            }
            $image = $mediaService->saveFile($request->image,'events_image');
            $all['image'] = $image;
        }

        $event->update($all);

        if($request->tags_id){
            $event->tags()->detach();
            foreach($request->tags_id as $id){
                $event->tags()->attach($id);
            }
        }

        if($request->experts_id){
            $event->experts()->detach();
            foreach($request->experts_id as $id){
                $event->experts()->attach($id);
            }
        }

        if ($request->gallery) {
            foreach ($request->gallery as $item){

                $url = $mediaService->saveFile($item,'events_gallery');

                EventGallery::create([
                    'event_id' => $event->id,
                    'url' => $url
                ]);
            }
        }

        if ($request->materials) {
            EventMaterial::where('event_id', $event->id)->delete();
            foreach ($request->materials as $item){

                $url = $mediaService->saveFileToPublic($item,"events_materials/$event->id");

                EventMaterial::create([
                    'event_id' => $event->id,
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('admin.events.edit', $event->id)
            ->with('success', 'Сохранено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::find($id)->delete();

        return redirect()->route('admin.events.index')
            ->with('success', 'Удалено');
    }

        /**
     * @param $id
     * @return \Illuminate\Http\Response|\Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function exportRegistrations($id)
    {
        return (new EventRegistrationsExport($id))->download('registrations.xlsx');
    }
}
