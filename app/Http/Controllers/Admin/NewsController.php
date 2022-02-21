<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Tag;
use App\Models\Agenda;
use App\Models\Expert;
use Illuminate\Support\Carbon;
use App\Services\PageService;
use App\Models\NewsTranslation;
use App\Services\MediaService;
use Illuminate\Support\Facades\Gate;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::latest()->paginate(10);

        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $default = array_merge([
            'date' => Carbon::now(),
        ], array_fill_keys(config('translatable.locales'), []));
        $item = new News($default);
        $agendas = Agenda::all()->pluck('name', 'id');
        $tags = Tag::all()->pluck('name', 'id');
        $experts = Expert::all()->pluck('name', 'id');

        return view('admin.news.create', compact('item', 'agendas', 'tags', 'experts'));
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

        $all['show_on_promo'] = isset($all['show_on_promo']) ? 1 : 0;
        $all['show_as_main'] = isset($all['show_as_main']) ? 1 : 0;

        if($request->image){
            $image = $mediaService->saveFile($request->image, 'news');
            $all['image'] = $image;
        }

        $news = News::create($all);

        if($request->tags_id){
            foreach($request->tags_id as $tag_id){
                $news->tags()->attach($tag_id);
            }
        }

        if($request->experts_id){
            foreach($request->experts_id as $experts_id){
                $news->experts()->attach($experts_id);
            }
        }

        return redirect()->back()
            ->with('success', 'Создано');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = News::find($id);
        $tags_id = [];
        $experts_id = [];

        foreach($item->tags as $tag){
            $tags_id[] = $tag->pivot->tag_id;
        }
        $experts_id = [];
        foreach($item->experts as $expert){
            $experts_id[] = $expert->pivot->expert_id;
        }

        $agendas = Agenda::all()->pluck('name', 'id');
        $tags = Tag::all()->pluck('name', 'id');
        $experts = Expert::all()->pluck('name', 'id');

        $item['tags_id'] = $tags_id;
        $item['experts_id'] = $experts_id;

        return view('admin.news.edit', compact('item', 'agendas', 'tags', 'experts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news, MediaService $mediaService)
    {
        $all = $request->all();
        if($request->image){
            if (file_exists($news->image)) {
                @unlink($news->image);
            }
            $image = $mediaService->saveFile($request->image, 'news');
            $all['image'] = $image;
        }

        $all['show_on_promo'] = isset($all['show_on_promo']) ? 1 : 0;
        $all['show_as_main'] = isset($all['show_as_main']) ? 1 : 0;

        $news->tags()->detach();
        $news->experts()->detach();
        $news->update($all);

        if($request->tags_id){
            foreach($request->tags_id as $tag_id){
                $news->tags()->attach($tag_id);
            }
        }

        if($request->experts_id){
            foreach($request->experts_id as $experts_id){
                $news->experts()->attach($experts_id);
            }
        }

        return redirect()->back()
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
        NewsTranslation::where('news_id', $id)->delete();
        News::find($id)->delete();

        return redirect()->route('admin.news.index')
            ->with('success', 'Удалено');
    }
}
