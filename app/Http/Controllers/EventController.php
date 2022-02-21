<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRegistrationRequest;
use App\Models\Block;
use App\Models\Event;
use App\Models\EventRegistration;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(string $locale)
    {
        $mainEvents = Event::where('is_main', 1)->orderBy('date_start', 'desc')->limit(3)->get();
        $upcommingEvents = Event::where('date_start', '>', now())->orderBy('date_start', 'desc')->paginate(6);

        $pastEvents = Event::where('date_start', '<', now())->orderBy('date_start', 'desc')->paginate(8);

        $blocks = Block::where('model', 'Event')->get();

        return view('front.events.index', compact('upcommingEvents', 'pastEvents', 'blocks', 'mainEvents', 'locale'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(string $locale, Event $event)
    {
        $events = Event::orderBy('date_start', 'desc')->paginate(4);
        return view('front.events.show', compact('event', 'events', 'locale'));
    }

    public function register(EventRegistrationRequest $request){
        EventRegistration::create($request->all());
        return redirect()->back()->with('success', 'Заявка подана', 'locale');
    }

    public function download(Request $request)
    {
        $id = $request->id;
        $zip = new \ZipArchive();
        $fileName = 'zipFile.zip';
        if ($zip->open(public_path($fileName), \ZipArchive::CREATE)== TRUE)
        {
            $files = \File::files(\public_path("events_materials/$id"));
            foreach ($files as $key => $value){
                $relativeName = basename($value);
                $zip->addFile($value, $relativeName);
            }
            $zip->close();
        }

        return response()->download(public_path($fileName));
    }
}
