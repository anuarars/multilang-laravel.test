<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Event;
use App\Models\SocialNetwork;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(string $locale)
    {
        $newsCount = News::count();
        $upcommingEvents = Event::where('date_start', '>', now())->orderBy('date_start', 'desc')->paginate(6);
        $news = News::orderBy('created_at', 'desc')->paginate(8);
        $mainNews = News::where('is_main', 1)->orderBy('created_at', 'desc')->limit(3)->get();
        return view('front.news.index', compact('news', 'upcommingEvents', 'newsCount', 'mainNews', 'locale'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $locale, $id)
    {
        $news = News::orderBy('created_at', 'desc')->limit(4)->paginate(8);
        $newsitem = News::findOrFail($id);
        $network = SocialNetwork::all();

        return view('front.news.show', compact('newsitem', 'news', 'network', 'locale'));
    }
}
