<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Team;
use App\Models\Expert;

class PageController extends Controller
{
    public function show(string $locale,$path = '/'){
        // if ($path === '/') {

            // $settings = Settings::latest()->limit(1)->get();

            // if ($settings->isEmpty()) {
            //     $event = Event::latest()->limit(1)->first();
            //     $publication = Publication::latest()->limit(1)->first();
            //     $news = News::latest()->limit(1)->first();
            //     $project = null;
            // } else {
            //     $event = Event::find($settings->first()->event_id);
            //     $publication = Publication::find($settings->first()->publication_id);
            //     $news = News::find($settings->first()->news_id);
            //     $project = Project::find($settings->first()->project_id);
            // }

            // $slogan = Slogan::wherePlace('main')->first();
        //     $title = app()->getLocale() === 'ru' ? 'ЦМСПИ' : 'ICLRC';

        //     return view('pages.index', compact('slogan', 'event', 'publication', 'news', 'project', 'title', 'settings'));
        // }

        $page = Page::wherePath($path)->where('status', 1)->firstOrFail();

        return view('front.pages.index', compact('page'));
    }

    public function people(){
        $team = Team::limit(7)->get();
        $experts = Expert::limit(7)->get();
        return view('front.pages.people', compact('team', 'experts'));
    }
}
