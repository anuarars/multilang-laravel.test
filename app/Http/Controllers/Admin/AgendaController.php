<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Services\MediaService;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendas = Agenda::all();

        return view('admin.agendas.index', compact('agendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $default = array_merge(array_fill_keys(config('translatable.locales'), []));

        return view('admin.agendas.create', [
            'item' => new Agenda($default)
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
        $all = $request->all();
        if($request->image){
            $image = $mediaService->saveFile($request->image, 'agenda_image');
            $all['image'] = $image;
        }

        Agenda::create($all);

        return redirect()->back()
            ->with('success', 'Создано');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Agenda $agenda)
    {
        return view('admin.agendas.edit', [
            'item' => $agenda
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agenda $agenda, MediaService $mediaService)
    {
        $all = $request->all();

        if($request->image){
            $image = $mediaService->saveFile($request->image, 'agenda_image');
            $all['image'] = $image;
        }
        $agenda->update($all);

        return redirect()->back()
            ->with('success', 'Сохранено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agenda $agenda)
    {
        $agenda->delete();

        return redirect()->route('admin.agendas.index')
            ->with('success', 'Удалено');
    }

    public function show(Agenda $agenda){
        return view('admin.agendas.show', compact('agenda'));
    }
}
