<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PublicationRequest;
use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Agenda;
use App\Models\Block;
use App\Models\Expert;
use App\Models\PublicationGallery;
use App\Models\Tag;
use App\Models\PublicationType;
use App\Services\MediaService;
use Illuminate\Support\Facades\DB;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications = Publication::with('type')->latest()->paginate(20);

        return view('admin.publications.index', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agendas = Agenda::all()->pluck('name', 'id');
        $tags = Tag::all()->pluck('name', 'id');
        $experts = Expert::all()->pluck('name', 'id');
        $default = array_fill_keys(config('translatable.locales'), []);
        $publication_types = PublicationType::all()->pluck('name', 'id');
        $publication = new Publication($default);

        return view('admin.publications.create', compact('agendas', 'tags', 'experts', 'publication_types', 'publication'));
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

        if($request->photo){
            $image = $mediaService->saveFile($request->photo, 'publication');
            $all['image'] = $image;
        }

        if($request->file){
            $image = $mediaService->saveFile($request->file, 'publication');
            $all['file'] = $image;
        }

        $publication = Publication::create($all);

        if($request->experts_id){
            foreach($request->experts_id as $id){
                $publication->experts()->attach($id);
            }
        }

        if($request->main_expert_id){
            $publication->experts()->attach($request->main_expert_id, [
                'is_main' => 1
            ]);
        }

        if($request->tags_id){
            foreach($request->tags_id as $id){
                $publication->tags()->attach($id);
            }
        }
        
        if ($request->materials) {
            foreach ($request->materials as $material){
                $url = $mediaService->saveFile($material, 'publication_materials');
                
                PublicationGallery::create([
                    'publication_id' => $publication->id,
                    'url' => $url
                ]);
            }
        }

        if($request->pdf_ru){
            $url = $mediaService->saveFile($request->pdf_ru, 'publication_pdf');
            DB::table('publication_translations')->where('publication_id', $publication->id)->where('locale', 'ru')->update([
                'pdf' => $url
            ]);
        }

        if($request->pdf_en){
            $url = $mediaService->saveFile($request->pdf_en, 'publication_pdf');
            DB::table('publication_translations')->where('publication_id', $publication->id)->where('locale', 'en')->update([
                'pdf' => $url
            ]);
        }
 
        return redirect()->route('admin.publications.edit', $publication->id)
            ->with('success', 'Создано');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Publication $publication)
    {
        return view('admin.publications.show', compact('publication'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publication)
    {
        // $url = $publication->getFirstMediaUrl('publication');
        // return str_replace('http://localhost/', '', $url);
        $tags_id = [];
        $experts_id = [];
        $main_expert_id = $publication->experts()->wherePivot('is_main', 1)->first();

        foreach($publication->tags as $tag){
            $tags_id[] = $tag->pivot->tag_id;
        }
        $experts_id = [];
        foreach($publication->experts as $expert){
            $experts_id[] = $expert->pivot->expert_id;
        }

        $publication['experts_id'] = $experts_id;
        $publication['tags_id'] = $tags_id;
        $publication['main_expert_id'] = $main_expert_id->id ?? "";

        $agendas = Agenda::all()->pluck('name', 'id');
        $tags = Tag::all()->pluck('name', 'id');
        $experts = Expert::all()->pluck('name', 'id');
        $publication_types = PublicationType::all()->pluck('name', 'id');

        // dd($publication);

        return view('admin.publications.edit', compact('agendas', 'tags', 'experts', 'publication_types', 'publication'));
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

        $publication = Publication::findOrFail($id);

        if($request->experts_id){
            $publication->experts()->detach();
            foreach($request->experts_id as $id){
                $publication->experts()->attach($id);
            }
        }

        if($request->main_expert_id){
            $publication->experts()->attach($request->main_expert_id, [
                'is_main' => 1
            ]);
        }

        $publication->tags()->detach();
        if($request->tags_id){
            foreach($request->tags_id as $id){
                $publication->tags()->attach($id);
            }
        }
        if ($request->materials) {
            foreach ($request->materials as $material){
                $url = $mediaService->saveFile($material, 'publication_materials');
                
                PublicationGallery::create([
                    'publication_id' => $publication->id,
                    'url' => $url
                ]);
            }
        }

        if($request->photo){
            if (file_exists($publication->image)) {
                @unlink($publication->image);
            }
            $image = $mediaService->saveFile($request->photo, 'publication');
            $all['image'] = $image;
        }

        if($request->pdf_ru){
            $url = $mediaService->saveFile($request->pdf_ru, 'publication_pdf');
            DB::table('publication_translations')->where('publication_id', $publication->id)->where('locale', 'ru')->update([
                'pdf' => $url
            ]);
        }

        if($request->pdf_en){
            $url = $mediaService->saveFile($request->pdf_en, 'publication_pdf');
            DB::table('publication_translations')->where('publication_id', $publication->id)->where('locale', 'en')->update([
                'pdf' => $url
            ]);
        }

        $publication->update($all);

        return redirect()->back()
            ->with('success', 'Обновлено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $publication)
    {
        $publication->delete();

        return redirect()->route('admin.publications.index')
            ->with('success', 'Удалено');
    }
}
