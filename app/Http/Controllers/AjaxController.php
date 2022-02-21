<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Mediabank;
use App\Models\News;
use App\Models\Publication;
use Illuminate\Http\Request;
use App\Models\MediabankGallery;

class AjaxController extends Controller
{
    public function upcoming_events(Request $request){
        if($request->ajax()){
            $locale = $request->lang;
            $upcommingEvents = Event::where('date_start', '>', now())->orderBy('date_start', 'desc')->paginate(6);
            return view('includes.pagination_data', compact('upcommingEvents', 'locale'))->render();
        }
    }

    public function past_events(Request $request){
        if($request->ajax()){
            $locale = $request->lang;
            $pastEvents = Event::where('date_start', '<', now())->orderBy('date_start', 'desc')->paginate(8);
            return view('pagination.past_events', compact('pastEvents', 'locale'))->render();
        }
    }

    public function other_events(Request $request){
        if($request->ajax()){
            $locale = $request->lang;
            $events = Event::orderBy('date_start', 'desc')->paginate(4);
            return view('pagination.other_events', compact('events', 'locale'))->render();
        }
    }

    public function other_news(Request $request){
        if($request->ajax()){
            $locale = $request->lang;
            $news = News::orderBy('created_at', 'desc')->paginate(8);
            return view('pagination.other_news', compact('news', 'locale'))->render();
        }
    }

    public function other_publications(Request $request){
        if($request->ajax()){
            $locale = $request->lang;
            $publications = Publication::orderBy('created_at', 'desc')->paginate(4);
            return view('pagination.other_publications', compact('publications', 'locale'))->render();
        }
    }

    public function media_video(Request $request){
        if($request->ajax()){
            $videos = MediabankGallery::where('type', 'video')->paginate(6);
            return view('pagination.media_video', compact('videos'))->render();
        }
    }

    public function media_image(Request $request){
        if($request->ajax()){
            $images = Mediabank::whereHas('gallery', function($q){
                $q->where('type', '=', 'image');
            })->paginate(6);
            return view('pagination.media_images', compact('images'))->render();
        }
    }
}