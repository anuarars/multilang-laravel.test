<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Degree;
use App\Models\Expert;
use Illuminate\Http\Request;
use App\Models\ExpertTranslation;
use App\Models\Workfile;
use App\Models\Language;
use App\Models\University;
use App\Services\MediaService;

class ExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experts = Expert::orderByTranslation('name', 'asc')->paginate(10);

        return view('admin.experts.index', compact('experts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $default =  array_fill_keys(config('translatable.locales'), []);
        $expert = new Expert($default);
        $languages = Language::all()->pluck('name', 'id');
        $universities = University::all()->pluck('name', 'id');
        $agendas = Agenda::all()->pluck('name', 'id');
        $degrees = Degree::all()->pluck('name', 'id');

        return view('admin.experts.create', compact('expert', 'languages', 'universities', 'agendas', 'degrees'));
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
        // dd($all);

        if($request->image){
            $image = $mediaService->saveFile($request->image, 'expert_image');
            $all['image'] = $image;
        }


        if($request->cv){
            $cv = $mediaService->saveFile($request->cv,'expert_cv');
            $all['cv'] = $cv;
        }

        $all['type'] = isset($all['type']) ? 1 : 0;
        $all['is_show'] = isset($all['is_show']) ? 1 : 0;
        $expert = Expert::create($all);

        if($request->language_id){
            foreach($request->language_id as $language_id){
                $expert->languages()->attach($language_id);
            }
        }

        if($request->university_id){
            foreach($request->university_id as $university_id){
                $expert->universities()->attach($university_id);
            }
        }

        if($request->degree_id){
            foreach($request->degree_id as $degree_id){
                $expert->degrees()->attach($degree_id);
            }
        }

        if ($request->hasFile('works_file')) {
            foreach ($request->works_file as $file){
                $url = $mediaService->saveFile($file,'expert_works_file');

                Workfile::create([
                    'expert_id' => $expert->id,
                    'url' => $url
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
    public function edit(Expert $expert)
    {
        $language_id = [];
        $university_id = [];
        $agenda_id = [];
        $degree_id = [];

        foreach($expert->languages as $language){
            $language_id[] = $language->pivot->language_id;
        }

        foreach($expert->universities as $university){
            $university_id[] = $university->pivot->university_id;
        }

        foreach($expert->agendas as $agenda){
            $agenda_id[] = $agenda->pivot->agenda_id;
        }

        foreach($expert->degrees as $degree){
            $degree_id[] = $degree->pivot->degree_id;
        }

        $expert['language_id'] = $language_id;
        $expert['university_id'] = $university_id;
        $expert['agenda_id'] = $agenda_id;
        $expert['degree_id'] = $degree_id;

        $languages = Language::all()->pluck('name', 'id');
        $universities = University::all()->pluck('name', 'id');
        $agendas = Agenda::all()->pluck('name', 'id');
        $degrees = Degree::all()->pluck('name', 'id');
        
        return view('admin.experts.edit', compact('expert', 'languages', 'universities', 'agendas', 'degrees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expert $expert, MediaService $mediaService)
    {
        $all = $request->all();

        $expert->languages()->detach();
        $expert->universities()->detach();
        $expert->agendas()->detach();
        $expert->degrees()->detach();

        if($request->language_id){
            foreach($request->language_id as $language_id){
                $expert->languages()->attach($language_id);
            }
        }

        if($request->university_id){
            foreach($request->university_id as $university_id){
                $expert->universities()->attach($university_id);
            }
        }

        if($request->agenda_id){
            foreach($request->agenda_id as $agenda_id){
                $expert->agendas()->attach($agenda_id);
            }
        }

        if($request->degree_id){
            foreach($request->degree_id as $degree_id){
                $expert->agendas()->attach($degree_id);
            }
        }

        if ($request->works_file) {
            Workfile::where('expert_id', $expert->id)->delete();
            foreach ($request->file('works_file') as $file){
                $url = $mediaService->saveFile($file,'expert_works_file');

                Workfile::create([
                    'expert_id' => $expert->id,
                    'url' => $url
                ]);
            }
        }

        $all['type'] = isset($all['type']) ? 1 : 0;
        $all['is_show'] = isset($all['is_show']) ? 1 : 0;

        if($request->image){
            if (file_exists($expert->image)) {
                @unlink($expert->image);
            }
            $image = $mediaService->saveFile($request->image,'expert_image');
            $all['image'] = $image;
        }
        
        if($request->cv){
            if (file_exists($expert->cv)) {
                @unlink($expert->cv);
            }
            $cv = $mediaService->saveFile($request->cv,'expert_cv');
            $all['cv'] = $cv;
        }

        $expert->update($all);

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
        ExpertTranslation::where('expert_id', $id)->delete();
        Expert::find($id)->delete();

        return redirect()->route('admin.experts.index')
            ->with('success', 'Удалено');
    }
    
}