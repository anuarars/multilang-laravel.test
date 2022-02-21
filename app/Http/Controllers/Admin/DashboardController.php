<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Event;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function is_main(Request $request){
        if($request->entity == "news"){
            News::where('id', $request->item_id)->update([
                'is_main' => $request->value
            ]);
            return $request->value;
        }
        if($request->entity == "event"){
            Event::where('id', $request->item_id)->update([
                'is_main' => $request->value
            ]);
            return $request->value;
        }
        if($request->entity == "publication"){
            Publication::where('id', $request->item_id)->update([
                'is_main' => $request->value
            ]);
            return $request->value;
        }
    }
}