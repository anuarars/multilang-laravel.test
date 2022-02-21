<?php

namespace App\Http\Controllers;

// use App\Models\Agenda;

use App\Models\Event;
use App\Models\News;
use App\Models\Publication;
use Illuminate\Http\Request;
use DateTime;

class SearchController extends Controller
{
    public function search(Request $request){

        if($request->type){
            if(in_array('news', $request->type)){
                $news = News::paginate(8);
                if($request->from_m && $request->from_y && $request->to_m && $request->to_y){
                    $from = ''.$request->from_m .'-'.$request->from_y.'';
                    $to = ''.$request->to_m .'-'.$request->to_y.'';
        
                    $date_from = new DateTime($from);
                    $date_to = new DateTime($to);
        
                    $news = News::whereDate('created_at','<=',$date_to)
                    ->whereDate('created_at','>=',$date_from)
                    ->paginate(8);
                }
            }
            if(in_array('publication', $request->type)){
                $publications = Publication::paginate(8);
                if($request->from_m && $request->from_y && $request->to_m && $request->to_y){
                    $from = ''.$request->from_m .'-'.$request->from_y.'';
                    $to = ''.$request->to_m .'-'.$request->to_y.'';
        
                    $date_from = new DateTime($from);
                    $date_to = new DateTime($to);
        
                    $publications = Publication::whereDate('created_at','<=',$date_to)
                    ->whereDate('created_at','>=',$date_from)
                    ->paginate(8);
                }
            }
            if(in_array('event', $request->type)){
                $events = Event::paginate(8);
                if($request->from_m && $request->from_y && $request->to_m && $request->to_y){
                    $from = ''.$request->from_m .'-'.$request->from_y.'';
                    $to = ''.$request->to_m .'-'.$request->to_y.'';
        
                    $date_from = new DateTime($from);
                    $date_to = new DateTime($to);
        
                    $events = Event::whereDate('created_at','<=',$date_to)
                    ->whereDate('created_at','>=',$date_from)
                    ->paginate(8);
                }
            }
            return view('front.search.index', compact('news', 'publications', 'events'));
        }

        if($request->tags){
            $tags_id = $request->tags;

            $news = News::whereHas('tags', function ($q) use ($tags_id) {
                $q->whereIn('tag_id', $tags_id);
            })->get();
            
            $publications = Publication::whereHas('tags', function ($q) use ($tags_id) {
                $q->whereIn('tag_id', $tags_id);
            })->get();

            $events = Event::whereHas('tags', function ($q) use ($tags_id) {
                $q->whereIn('tag_id', $tags_id);
            })->get();

            return view('front.search.index', compact('news', 'publications', 'events'));
        }

        if($request->agendas){
            $agenda_id = $request->agendas;

            $news = News::whereIn('agenda_id', $agenda_id)->get();
            $publications = Publication::whereIn('agenda_id', $agenda_id)->get();
            $events = Event::whereIn('agenda_id', $agenda_id)->get();

            return view('front.search.index', compact('news', 'publications', 'events'));
        }
        
        if($request->experts){
            $experts_id = $request->experts;

            $news = News::whereHas('experts', function ($q) use ($experts_id) {
                $q->whereIn('expert_id', $experts_id);
            })->get();
            
            $publications = Publication::whereHas('experts', function ($q) use ($experts_id) {
                $q->whereIn('expert_id', $experts_id);
            })->get();

            $events = Event::whereHas('experts', function ($q) use ($experts_id) {
                $q->whereIn('expert_id', $experts_id);
            })->get();

            return view('front.search.index', compact('news', 'publications', 'events'));
        }
        
        if($request->from_m && $request->from_y && $request->to_m && $request->to_y){
            $from = ''.$request->from_m .'-'.$request->from_y.'';
            $to = ''.$request->to_m .'-'.$request->to_y.'';

            $date_from = new DateTime($from);
            $date_to = new DateTime($to);

            $news = News::whereDate('created_at','<=',$date_to)
            ->whereDate('created_at','>=',$date_from)
            ->get();
            
            $events = Event::whereDate('created_at','<=',$date_to)
            ->whereDate('created_at','>=',$date_from)
            ->get();

            $publications = Publication::whereDate('created_at','<=',$date_to)
            ->whereDate('created_at','>=',$date_from)
            ->get();

            return view('front.search.index', compact('news', 'publications', 'events'));
        }
    }
}