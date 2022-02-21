<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MainPage;
use App\Models\Agenda;
use App\Models\Publication;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\News;

class MainPageController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = MainPage::find($id);
        $agendas = Agenda::all()->pluck('name', 'id');
        $publications = Publication::all()->pluck('title', 'id');
        $events = Event::all()->pluck('title', 'id');
        $news = News::all()->pluck('title', 'id');

        return view('admin.main-page.edit', compact('item', 'agendas', 'publications', 'events', 'news'));
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
        $all = $request->all();
        $mainPage = MainPage::find($id);
        $mainPage->update($all);

        return redirect()->route('admin.main-page.edit', $id);
    }

}
