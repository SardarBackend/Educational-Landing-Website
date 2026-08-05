<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function episode_list(){
        return view('public.episode-list');
    }

    public function episode_single(){
        return view('public.episode-single');
    }
}
