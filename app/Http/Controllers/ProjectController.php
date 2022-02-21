<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Project;
use App\Models\Winner;
use App\Models\Work;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(string $locale){
        
        $projectCount = Project::count();
        $projects = Project::orderBy('created_at', 'desc')->limit(2)->get();
        return view('front.projects.index', compact('projects', 'projectCount'));
    }

    public function showBySlug(string $locale, $slug){
        if($slug == "award"){
            $project = Project::where('slug', $slug)->first();
            $winners = Winner::where('project_id', $project->id)->orderBy('year', 'desc')->get();
            $works = Work::where('project_id', $project->id)->get();
            $partners = Partner::where('project_id', $project->id)->get();
            return view('front.projects.show', compact('project', 'winners', 'works', 'partners'));
        }

        if($slug == "summer-school"){
            $project = Project::where('slug', $slug)->first();
            $councilExperts = $project->experts()->wherePivot('type', 'council')->get();
            $experts = $project->experts()->wherePivotNull('type')->get();
            $winners = Winner::where('project_id', $project->id)->orderBy('year', 'desc')->get();
            $works = Work::where('project_id', $project->id)->get();
            $partners = Partner::where('project_id', $project->id)->get();
            return view('front.projects.summer-school', compact('project', 'winners', 'works', 'partners', 'experts', 'councilExperts'));
        }
    }
}