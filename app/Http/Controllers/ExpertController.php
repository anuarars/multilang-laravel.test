<?php

namespace App\Http\Controllers;

use App\Models\Expert;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(string $locale)
    {
        $expertsCount = Expert::count();
        $experts = Expert::where('is_show', 1)->get();
        return view('front.experts.index', compact('experts', 'expertsCount'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function show(string $locale, Expert $expert)
    {
        if($expert->is_show == true){
            return view('front.experts.show', compact('expert'));
        }else{
            return redirect()->home();
        }
    }
}