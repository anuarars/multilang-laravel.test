<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Winner;
use App\Services\MediaService;
use Illuminate\Http\Request;
use App\Models\WinnerTranslation;

class WinnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $winners = Winner::all();
        return view('admin.winners.index', compact('winners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $default =  array_fill_keys(config('translatable.locales'), []);
        $item = new Winner($default);
        $projects = Project::all()->pluck('name', 'id');
        return view('admin.winners.create', compact('item', 'projects'));
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

        if($request->image){
            $image = $mediaService->saveFile($request->image, 'winners');
            $all['image'] = $image;
        }

        Winner::create($all);

        return redirect()->back()
            ->with('success', 'Создано');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Winner::find($id);
        $projects = Project::all()->pluck('name', 'id');
        return view('admin.winners.edit', compact('item', 'projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Winner $winner, MediaService $mediaService)
    {
        $all = $request->all();;

        if($request->image){
            if (file_exists($winner->image)) {
                @unlink($winner->image);
            }
            $image = $mediaService->saveFile($request->image, 'winners');
            $all['image'] = $image;
        }

        $winner->update($all);

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
        WinnerTranslation::where('winner_id', $id)->delete();
        Winner::find($id)->delete();

        return redirect()->route('admin.winners.index')
            ->with('success', 'Удалено');
    }
}