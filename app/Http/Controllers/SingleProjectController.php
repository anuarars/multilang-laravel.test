<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Winner;
use App\Models\Project;
use App\Models\Work;
use App\Models\Partner;

class SingleProjectController extends Controller
{
    public function show(string $locale, $id){
        $project = Project::where('id', $id)->first();
        if($project->slug != null){
            return redirect()->route('projects.slug', $project->slug);
        }else{
            $winners = Winner::where('project_id', $id)->orderBy('year', 'desc')->get();
            $works = Work::where('project_id', $id)->get();
            $partners = Partner::where('project_id', $id)->get();
            return view('front.projects.show', compact('project', 'winners', 'works', 'partners'));
        }
    }
}