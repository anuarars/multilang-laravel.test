<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageTranslation;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::orderBy('path')->paginate(20);

        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $default = array_merge([
            'status' => 1,
        ], array_fill_keys(config('translatable.locales'), []));
        $page = new Page($default);

        return view('admin.pages.create', [
            'item' => $page,
            // 'layouts' => $this->layoutList()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {
        $request->merge(['status' => $request->has('status')]);

        $page = Page::create($request->all());

        // $this->updateOptional($request->input('optional'), $page);

        return redirect()->back()
            ->with('success', 'Создано');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return view('admin.pages.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('admin.pages.edit', [
            'item' => $page,
            // 'layouts' => $this->layoutList()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $request->merge(['status' => $request->has('status')]);

        $page->update($request->all());

        // $this->updateOptional($request->input('optional'), $page);

        return redirect()->back()
            ->with('success', 'Сохранено');
    }

    public function updateByAjax(Request $request, $id){
        $page = Page::find($id);

        $page->translate($request->lang)->content = $request->content;
        $page->save();
        return "tset";

        // $data = [
        //     $request->lang => [
        //         'content' => $request->content
        //     ]
        // ];
        // $page = Page::find($id);
        // $page->update($data);
        // $page = PageTranslation::where('page_id', $id)->where('locale', $request->lang)->update([
        //     'content' => $request->content
        // ]);
        // var_dump($page);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('admin.pages.index')
            ->with('success', 'Удалено');
    }

    
    private function layoutList()
    {
        $return = [
            '' => 'По умолчанию'
        ];
        $locale_regexp = '/-('.implode('|', config('app.content_locales')).')$/';

        $files = \File::files(resource_path('views/pages/layout'));
        foreach ($files as $file) {
            $file = str_replace('.blade.php', '', basename($file));
            $file = preg_replace($locale_regexp, '', $file);
            $return[$file] = $file;
        }

        return $return;
    }
}
