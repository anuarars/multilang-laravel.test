<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\CurrentEvent;
use App\Models\Event;
use App\Models\MainPage;
use App\Models\News;
use App\Models\Publication;

class IndexController extends Controller
{
    public function index(string $locale){
        $mainPage = MainPage::first();
        $event = Event::find($mainPage->event_id);
        $agenda = Agenda::find($mainPage->agenda_id);
        $newsItem = News::find($mainPage->news_id);
        $publication = Publication::find($mainPage->publication_id);
        $currentEvent = CurrentEvent::first();
        return view('layouts.main', compact('mainPage', 'event', 'agenda', 'publication', 'newsItem', 'currentEvent'));
    }
}