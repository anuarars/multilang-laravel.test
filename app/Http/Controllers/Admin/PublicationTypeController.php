<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PublicationType;
use Illuminate\Http\Request;

class PublicationTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = PublicationType::all();

        return view('admin.publication_types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $default = array_merge(array_fill_keys(config('translatable.locales'), []));
        $type = new PublicationType($default);

        return view('admin.publication_types.create', [
            'item' => $type,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $type = PublicationType::create($request->except('_token'));

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
        $type = PublicationType::find($id);

        return view('admin.publication_types.edit', [
            'item' => $type,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $type = PublicationType::find($id);

        $type->update($request->except('_method', '_token'));

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
        PublicationType::find($id)->delete();

        return redirect()->route('admin.publication_types.index')
            ->with('success', 'Удалено');
    }
}
