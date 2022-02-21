<?php

namespace App\Http\Controllers;

use App\Models\BookRecomendation;
use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Requests\BookRecommendationRequest;
use App\Models\Donator;
use App\Models\News;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class LibraryController extends Controller
{
    public function index(string $locale){
        $donators = Donator::all();
        $partners = Partner::where('type', 'library')->get();
        $bookCount = BookRecomendation::count();
        $tag = Tag::whereTranslation('name', 'library')->first();
        $news = $tag->news;
        return view('front.library.index', compact('partners', 'donators', 'bookCount', 'news'));
    }

    public function recommend(BookRecommendationRequest $request){
        BookRecomendation::create($request->all());
        return redirect()->back();
    }
}
