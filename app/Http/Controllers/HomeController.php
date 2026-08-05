<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(){
        return view('public.index');
    }

    public function blogs(){

        $mostVisitedBlogs = blog::orderBy('count_view' , 'desc')->limit(6)->get();
        $topLikedBlogs = blog::withCount('likedByUsers')->orderBy('liked_by_users_count', 'desc')->limit(3)->get();
        $topLikedAndViewedBlog =  blog::withCount('likedByUsers')->orderBy('liked_by_users_count', 'desc')->orderBy('count_view','desc')->limit(3)->get();
        return view('public.blogs',compact('mostVisitedBlogs','topLikedBlogs','topLikedAndViewedBlog'));
    }

    public function single_blog(Request $request , int $id){
        $blog = blog::findOrFail($id);
        $blog->increment('count_view');
        $comments = $blog->comment()->where('status', true)->where('parent_id', 0)->get();
        // $relatedBlogs = 
        return view('public.blog',compact('blog','comments'));

    }

    public function books(){
        $books=Book::query();
        $books=$books->paginate(12);
        return view('public.books',compact( 'books'));
    }

    public function single_book(Request $request , int $id){
        $book=Book::findOrFail($id);
        return view('public.book',compact('book'));
    }

    public function faq()  {
        return view('public.faq');
    }

    public function about() {
        return view('public.about');
    }

    public function course_list()  {
        return view('public.course-list');
    }
    public function Achievements()  {
        return view('public.Achievements');
    }
    public function way()  {
        return view('public.way');
    }
}
