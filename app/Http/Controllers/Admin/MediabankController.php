<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Expert;
use App\Models\Mediabank;
use App\Models\MediabankGallery;
use App\Models\Project;
use App\Services\MediaService;
use Illuminate\Http\Request;

class MediabankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mediabanks = Mediabank::all();
        return view('admin.mediabanks.index', compact('mediabanks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::all()->pluck('title', 'id');
        $projects = Project::all()->pluck('name', 'id');
        $experts = Expert::all()->pluck('name', 'id');
        $mediabank = new Mediabank();
        return view('admin.mediabanks.create', compact('events', 'projects', 'mediabank', 'experts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, MediaService $mediaService)
    {
        $all = $request->all();
        $mediabank = Mediabank::create($all);

        if ($request->image) {
            foreach ($request->image as $image){
                $url = $mediaService->saveFile($image, 'mediabank');

                MediabankGallery::create([
                    'mediabank_id' => $mediabank->id,
                    'url' => $url,
                    'type' => 'image'
                ]);
            }
        }
        if ($request->video) {
            foreach ($request->video as $video){
                $url = $mediaService->saveFile($video, 'mediabank');

                MediabankGallery::create([
                    'mediabank_id' => $mediabank->id,
                    'url' => $url,
                    'type' => 'video'
                ]);
            }
        }
        // if($request->projects_id){
        //     foreach($request->projects_id as $projects_id){
        //         $mediabank->projects()->attach($projects_id);
        //     }
        // }
        // if($request->events_id){
        //     foreach($request->events_id as $events_id){
        //         $mediabank->events()->attach($events_id);
        //     }
        // }

        return redirect()->back()
        ->with('success', 'Создано');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mediabank $mediabank)
    {
        // $events_id = [];
        // $projects_id = [];

        // foreach($mediabank->events as $event){
        //     $events_id[] = $event->pivot->event_id;
        // }
        // foreach($mediabank->projects as $project){
        //     $projects_id[] = $project->pivot->project_id;
        // }

        $events = Event::all()->pluck('title', 'id');
        $projects = Project::all()->pluck('name', 'id');
        $experts = Expert::all()->pluck('name', 'id');

        // $mediabank['events_id'] = $events_id;
        // $mediabank['projects_id'] = $projects_id;

        return view('admin.mediabanks.edit', compact('mediabank', 'events', 'projects', 'experts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mediabank $mediabank, MediaService $mediaService)
    {
        $all = $request->all();
        if($request->image){
            foreach($mediabank->gallery()->where('type', 'image') as $media){
                if (file_exists($media->url)) {
                    @unlink($media->url);
                }
            }
            foreach ($request->image as $image){
                $url = $mediaService->saveFile($image, 'mediabank');

                MediabankGallery::create([
                    'mediabank_id' => $mediabank->id,
                    'url' => $url,
                    'type' => 'image'
                ]);
            }
        }
        if($request->video){
            foreach($mediabank->gallery()->where('type', 'video') as $media){
                if (file_exists($media->url)) {
                    @unlink($media->url);
                }
            }
            foreach ($request->video as $video){
                $url = $mediaService->saveFile($video, 'mediabank');

                MediabankGallery::create([
                    'mediabank_id' => $mediabank->id,
                    'url' => $url,
                    'type' => 'video'
                ]);
            }
        }

        $mediabank->update($all);
        // if($request->projects_id){
        //     $mediabank->projects()->detach();
        //     foreach($request->projects_id as $projects_id){
        //         $mediabank->projects()->attach($projects_id);
        //     }
        // }
        // if($request->events_id){
        //     $mediabank->events()->detach();
        //     foreach($request->events_id as $events_id){
        //         $mediabank->events()->attach($events_id);
        //     }
        // }
        return redirect()->back()
        ->with('success', 'Сохранено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mediabank $mediabank)
    {
        $mediabank->delete();
        return redirect()->route('admin.mediabanks.index')
        ->with('success', 'Удалено');
    }
}
