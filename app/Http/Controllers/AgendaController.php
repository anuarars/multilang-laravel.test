<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index(string $locale){
        $agendaCount = Agenda::count();
        $agendas = Agenda::all();
        return view('front.agenda.index', compact('agendas', 'agendaCount'));
    }

    public function show(string $locale, Agenda $agenda){
        return view('front.agenda.show', compact('agenda'));
    }
}