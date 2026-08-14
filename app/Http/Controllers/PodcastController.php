<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function episode_list(){
        $podcasts=Podcast::paginate(12);
        return view('public.episode-list',compact('podcasts'));
    }

    public function episode_single(){
        return view('public.episode-single');
    }
}
