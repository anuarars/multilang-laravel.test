<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\SocialNetwork;
use Illuminate\Http\Request;
use App\Models\Block;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(string $locale)
    {
        $blocks = Block::where('model', 'Publication')->get();
        $mainPublications = Publication::where('is_main', 1)->orderBy('created_at', 'asc')->limit(3)->get();
        $publications = Publication::orderBy('created_at', 'desc')->paginate(4);
        return view('front.publications.index', compact('publications', 'blocks', 'mainPublications', 'locale'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show(string $locale, Publication $publication)
    {
        $network = SocialNetwork::all();
        $publications = Publication::orderBy('created_at', 'desc')->paginate(4);
        return view('front.publications.show', compact('publication', 'network', 'publications', 'locale'));
    }

}
