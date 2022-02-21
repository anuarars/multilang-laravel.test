<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\PartnerTranslation;
use App\Services\MediaService;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::where('type', 'library')->get();
        return view('admin.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $default = array_merge(array_fill_keys(config('translatable.locales'), []));
        $item = new Partner($default);

        return view('admin.partners.create', [
            'item' => $item
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
        // dd($request->all());
        $all = $request->all();
        $all['type'] = 'library';

        if($request->image){
            $image = $mediaService->saveFile($request->image, 'partners');
            $all['image'] = $image;
        }

        Partner::create($all);

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
        $item = Partner::find($id);
        return view('admin.partners.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner, MediaService $mediaService)
    {
        $all = $request->all();
        if($request->image){
            if (file_exists($partner->image)) {
                @unlink($partner->image);
            }
            $image = $mediaService->saveFile($request->image, 'partners');
            $all['image'] = $image;
        }
        
        $partner->update($all);

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
        PartnerTranslation::where('partner_id', $id)->delete();
        Partner::find($id)->delete();

        return redirect()->route('admin.news.index')
            ->with('success', 'Удалено');
    }
}
