<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
        $teamCount = Team::count();
        $team = Team::all();
        return view('front.team.index', compact('team', 'teamCount'));
    }
}
