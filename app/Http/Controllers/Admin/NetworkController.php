<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\SocialNetwork;
use Illuminate\Http\Request;

class NetworkController extends Controller
{
    public function index(){
        $networks = DB::table('social_networks')->first();
        return view('admin.networks.index', compact('networks'));
    }

    public function store(Request $request){
        SocialNetwork::updateOrCreate([
            'id' => 1
        ],[
            'id' => 1,
            'facebook' => $request->facebook,
            'youtube' => $request->youtube,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin
        ]);

        return redirect()->route('admin.networks.index')->with('success', 'Изменено');
    }
}
