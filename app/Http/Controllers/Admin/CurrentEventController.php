<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CurrentEvent;
use App\Models\Event;
use Illuminate\Http\Request;

class CurrentEventController extends Controller
{
    public function index(){
        $currentEvent = CurrentEvent::first();
        $events = Event::all()->pluck('title', 'id');
        return view('admin.current-events.index', compact('currentEvent', 'events'));
    }

    public function store(Request $request){
        $item = CurrentEvent::find(1);
        $request->merge(['is_active' => $request->has('is_active')]);
        $all = $request->all();
        // dd($all);
        // $all['is_active'] = isset($all['is_active']) ? 1 : 0;
        $item->update($all);
        return redirect()->back()->with('success', 'Изменено');
    }
}
