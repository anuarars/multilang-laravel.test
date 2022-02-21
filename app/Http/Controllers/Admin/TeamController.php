<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\TeamTranslation;
use App\Services\MediaService;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        return view('admin.teams.index', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $default =  array_fill_keys(config('translatable.locales'), []);
        $team = new Team($default);
        return view('admin.teams.create', compact('team'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, MediaService $mediaService)
    {
        $all = $request->except('_token');

        if($request->image){
            $image = $mediaService->saveFile($request->image, 'team');
            $all['image'] = $image;
        }

        Team::create($all);

        return redirect()->back()
            ->with('success', 'Создано');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team, MediaService $mediaService)
    {
        $all = $request->all();;

        if($request->image){
            if (file_exists($team->image)) {
                @unlink($team->image);
            }
            $image = $mediaService->saveFile($request->image, 'team');
            $all['image'] = $image;
        }

        $team->update($all);

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
        TeamTranslation::where('team_id', $id)->delete();
        Team::find($id)->delete();

        return redirect()->route('admin.teams.index')
            ->with('success', 'Удалено');
    }
}
