<?php

namespace App\Http\Controllers;

use App\Models\Mediabank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MediabankGallery;

class MediaController extends Controller
{
    public function index(string $locale){
        $videos = MediabankGallery::where('type', 'video')->paginate(6);
        // $images = MediabankGallery::where('type', 'image')->paginate(6);
        $images = Mediabank::whereHas('gallery', function($q){
            $q->where('type', '=', 'image');
        })->paginate(6);
        return view('front.media.index', compact('videos', 'images'));
    }
}