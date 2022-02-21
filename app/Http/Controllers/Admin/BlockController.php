<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Agenda;
use App\Models\Expert;
use App\Models\Block;

class BlockController extends Controller
{
    public function index(){
        $tags = Tag::all();
        $agendas = Agenda::all();
        $experts = Expert::all();
        $blocks = Block::all();
        return view('admin.blocks.index', compact('tags', 'agendas', 'experts', 'blocks'));
    }

    public function store(Request $request){
        Block::create($request->except('_token'));
        return redirect()->route('admin.blocks.index')->with('success', 'Сохранено');
    }

    public function destroy(Block $block){
        $block->delete();
        return redirect()->route('admin.blocks.index')
        ->with('success', 'Удалено');
    }
}
