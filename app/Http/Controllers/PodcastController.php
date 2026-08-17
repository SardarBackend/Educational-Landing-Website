<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function episode_list(){
        $podcasts=Podcast::paginate(15);
        $categories=categories::where('categorytable_type',Podcast::class)->get();
        return view('public.episode-list',compact('podcasts','categories'));
    }
    public function category_podcast(Request $request , categories $category){
        $categories=categories::where('categorytable_type',Podcast::class)->get();
        $podcasts =  Podcast::whereHas('categories' , function($query) use($category){
                $query->where('categories.id',$category->id);
        })->paginate(15);
        return view('public.episode-list',compact('podcasts','categories'));
    }
    
    public function episode_single(Request $request , int $id){
        $categories=categories::where('categorytable_type',Podcast::class)->get();
        $podcast=Podcast::findOrFail($id);
        $tags=$podcast->tags()->get();
        return view('public.episode-single',compact('podcast','tags','categories'));
    }
}
