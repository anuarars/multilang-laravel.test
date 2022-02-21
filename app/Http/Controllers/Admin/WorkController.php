<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Work;
use Illuminate\Http\Request;
use App\Models\WorkTranslation;
use App\Services\MediaService;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::all();
        return view('admin.works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $default =  array_fill_keys(config('translatable.locales'), []);
        $item = new Work($default);
        $projects = Project::all()->pluck('name', 'id');
        return view('admin.works.create', compact('item', 'projects'));
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

        if($request->file){
            $file = $mediaService->saveFile($request->file, 'works');
            $all['file'] = $file;
        }


        $work = Work::create($all);

        return redirect()->route('admin.works.edit', $work->id)
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
        $item = Work::find($id);
        $projects = Project::all()->pluck('name', 'id');
        return view('admin.works.edit', compact('item', 'projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Work $work, MediaService $mediaService)
    {
        $all = $request->all();;

        if($request->file){
            $file = $mediaService->saveFile($request->file, 'works');
            $all['file'] = $file;
        }

        $work->update($all);

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
        WorkTranslation::where('work_id', $id)->delete();
        Work::find($id)->delete();

        return redirect()->route('admin.works.index')
            ->with('success', 'Удалено');
    }
}
