<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\blogcategory;
use App\Models\Book;
use App\Models\categories;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Message;
use App\Models\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index(){
        Auth::loginUsingId(1);
        // Auth::logout();
        
        session()->forget('cart');
        $blogs=blog::all();
        return view('public.index',compact('blogs'));
    }

    public function blogs()
    {


    // Cache most visited blogs for 10 minutes
    $mostVisitedBlogs = blog::orderBy('count_view', 'desc')->limit(6)->get();


    // Cache top liked blogs for 10 minutes
    $topLikedBlogs = blog::withCount('likedByUsers')
            ->orderBy('liked_by_users_count', 'desc')
            ->limit(3)
            ->get();


    // Cache the most liked and most viewed blog for 10 minutes
    $topLikedAndViewedBlog = blog::withCount('likedByUsers')
            ->orderBy('liked_by_users_count', 'desc')
            ->orderByDesc('count_view')
            ->first();


    // Paginate blogs, no caching applied as it changes frequently
    $paginatedBlogs = blog::orderBy('failed_at', 'desc')->paginate(10);

    // Retrieve favorite blogs for the authenticated user if logged in
    $userFavoriteBlogs = auth()->check()
        ? auth()->user()->favorite_blog()->get()
        : [];

    // Cache blog categories for 1 hour
    $blogCategories = categories::where('categorytable_type',blog::class)->get();

    // Return the blog view with all the data
    return view('public.blogs', compact(
        'paginatedBlogs',
        'blogCategories',
        'mostVisitedBlogs',
        'userFavoriteBlogs',
        'topLikedBlogs',
        'topLikedAndViewedBlog'
    ));


    }

    public function single_blog(Request $request , int $id){
        $blog = blog::findOrFail($id);
        $blog->increment('count_view');
        $comments = $blog->comment()->where('status', true)->where('parent_id', 0)->get();
        // $relatedBlogs = 
        $NewestBlogs=blog::orderBy('count_view', 'desc')->limit(6)->get();

        $relatedBlogs =  function () use ($blog) {
        $categoryIds = $blog->category->pluck('id');

            return Blog::with('category')
                ->whereHas('category', function ($query) use ($categoryIds) {
                    $query->whereIn('blogcategorys.id', $categoryIds);
                })
                ->where('id', '!=', $blog->id)
                ->distinct()
                ->get();
        };
        $tags =$blog->tags()->get();

        return view('public.blog',compact('blog','comments','NewestBlogs','tags','relatedBlogs'));

    }

    public function books(){
        $books=Book::query();
        $products=$books->paginate(12);
        return view('public.books',compact( 'products'));
    }

    public function single_book(Request $request , int $id){
        $product=Book::findOrFail($id);
        $questions = $product->questions()->get();
        $images=$product->gallery()->get();
        $comments = $product->comment()->get();

        $relatedproduct=function () use ($product) {
        $categoryIds = $product->category->pluck('id');

        return book::with('category')
            ->whereHas('category', function ($query) use ($categoryIds) {
                $query->whereIn('productcategory.id', $categoryIds);
            })
            ->where('id', '!=', $product->id)
            ->distinct()
            ->get();
        };
        $product->increment('count_view');
        return view('public.book',compact('product','images','comments','questions','relatedproduct'));
    }

    public function faq()  {
        return view('public.faq');
    }

    public function about() {
        return view('public.about');
    }

    public function course_list()  {
        $courses=Course::paginate(12);
        return view('public.course-list',compact('courses'));
    }

    public function course_single(Request $request , int $id)  {
        $Course=Course::with(['chapters.videos'])->findOrFail($id);
        $comments=$Course->comment()->get();
        $questions =$Course->questions()->with(['user','children.user'])->get();
        $tags=$Course->tags()->get();
        return view('public.course-detail',compact('Course','comments','questions','tags'));
    }
    public function Achievements()  {
        return view('public.Achievements');
    }

    public function Contact_post(Request $request){
        $data = $request->validate([
            'name' => ['required','string'],
            'email' => ['required','email'],
            'content' => ['required','string']
        ], [
            'name.required' => 'لطفاً نام خود را وارد کنید.',
            'email.required' => 'لطفاً ایمیل خود را وارد کنید.',
            'email.email' => 'ایمیل وارد شده صحیح نیست.',
            'content.required' => 'لطفاً محتوای پیام خود را وارد کنید.'
        ]);

        Contact::create($data);
        Alert::success('ارسال موفیت آمیز بود', 'پیغام شما ارسال شد');
        return back();
    }

    public function way()  {
        return view('public.way');
    }
    public function send_email(Request $request)  {
        DB::table('emails')->insert([
            'email' => $request->email
        ]);
        return back();
    }

    public function craete_comment(Request $request) {

    if ($request->commenttable_type==='App\Models\Book') {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
    }
    // Validate the incoming request data for comment creation
    $data = $request->validate([
        'parent_id' => 'max:255',  // Optional parent comment ID
        'user_id' => 'nullable',   // User ID must be provided
        'email' => 'nullable',   // User ID must be provided
        'username' => 'nullable',   // User ID must be provided
        'commenttable_id' => 'required',  // ID of the table being commented on
        'commenttable_type' => 'required', // Type of the table being commented on
        'content' => 'required',   // Comment content must be provided
        'subject' => 'nullable',
        'hosting' => 'nullable',
    ]);

    // Create a new comment in the database
    Comment::create($data);

    // Show a success alert to the user
    Alert::success('نظر شما ارسال شد', 'دیدگاه شما پس از تائید نمایش داده خواهد شد');

    // Redirect back to the previous page
    return back();
}
    public function create_question(Request $request){
        $data = $request->validate([
            'questionable_type' => ['required'],
            'questionable_id' => ['required'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'question' => ['required', 'string', 'max:500'],
        ]);
        question::create($data);
        Alert::success('پرسش شما ارسال شد', 'پرسش شما در اسرع وقت پاسخ داده خواهد شد');
        return back();
    }
    }
