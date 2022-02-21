<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Expert;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectTranslation;
use App\Models\Team;
use App\Services\MediaService;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        return view('admin.projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $default = array_merge(array_fill_keys(config('translatable.locales'), []));

        return view('admin.projects.create', [
            'item' => new Project($default),
            'experts' => Expert::all()->pluck('name', 'id'),
            'agenda' => Agenda::all()->pluck('name', 'id'),
            'team' => Team::all()->pluck('name', 'id'),
        ]);
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
        if($request->logo){
            $logo = $mediaService->saveFile($request->logo, 'project');
            $all['logo'] = $logo;
        }
        $project = Project::create($all);

        if($request->experts_id){
            foreach($request->experts_id as $expert_id){
                $project->experts()->attach($expert_id);
            }
        }
        if($request->team_id){
            foreach($request->team_id as $team_id){
                $project->team()->attach($team_id);
            }
        }
        if($request->council_experts_id){
            foreach($request->council_experts_id as $council_experts_id){
                $project->experts()->attach($council_experts_id, [
                    'type' => 'council'
                ]);
            }
        }

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
        $project = Project::find($id);

        $experts_id = [];
        $council_experts_id = [];
        $team_id = [];

        $experts = $project->experts()->wherePivotNull('type')->get();
        foreach($experts as $expert){
            $experts_id[] = $expert->pivot->expert_id;
        }

        $team = $project->team()->get();
        foreach($team as $staff){
            $team_id[] = $staff->pivot->team_id;
        }

        $councilExperts = $project->experts()->wherePivot('type', 'council')->get();
        foreach($councilExperts as $expert){
            $council_experts_id[] = $expert->pivot->expert_id;
        }

        $project['experts_id'] = $experts_id;
        $project['team_id'] = $team_id;
        $project['council_experts_id'] = $council_experts_id;

        return view('admin.projects.edit', [
            'item' => $project,
            'experts' => Expert::all()->pluck('name', 'id'),
            'agenda' => Agenda::all()->pluck('name', 'id'),
            'team' => Team::all()->pluck('name', 'id'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, MediaService $mediaService)
    {
        $all = $request->all();

        $project = Project::find($id);

        if($request->logo){
            if (file_exists($project->image)) {
                @unlink($project->image);
            }
            $logo = $mediaService->saveFile($request->logo, 'project');
            $all['logo'] = $logo;
        }

        $project->update($all);


        if($request->experts_id){
            $project->experts()->detach();
            foreach($request->experts_id as $id){
                $project->experts()->attach($id);
            }    
        }

        if($request->council_experts_id){
            foreach($request->council_experts_id as $council_experts_id){
                $project->experts()->attach($council_experts_id, [
                    'type' => 'council'
                ]);
            }
        }

        if($request->team_id){
            $project->team()->detach();
            foreach($request->team_id as $team_id){
                $project->team()->attach($team_id);
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
        ProjectTranslation::where('project_id', $id)->delete();
        Project::find($id)->delete();

        return redirect()->route('admin.projects.index')
            ->with('success', 'Удалено');
    }
}
