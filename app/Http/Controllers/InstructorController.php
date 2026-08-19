<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\categories;
use App\Models\Comment;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
       public function dashboard()
    {
        return view('public.instructor.instructor-dashboard');
    }

    public function createCourse()
    {
        $categories =categories::where('categorytable_type',Course::class)->get();
        return view('public.instructor.instructor-create-course',compact('categories'));
    }

    public function storeCourse(Request $request)
    {
        $request->validate([
            'title' => ['required','string'],
            'slug ' => ['required','string'],
            'short_description' => ['required','string'],
            'level' => ['required'],
            'duration_minutes' => ['required'],
            'videos_number' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
            'discount_price' => ['required'],
        ]);
        return ;
    }

    public function deleteAccount()
    {
        return view('public.instructor.instructor-delete-account');
    }

    // public function earning()
    // {
    //     return view('public.instructor.instructor-earning');
    // }

    public function editProfile()
    {
        return view('public.instructor.instructor-edit-profile');
    }

    public function list()
    {
        $teachers =User::where('is_teacher' , 1)->paginate(8);
        return view('public.instructor.instructor-list',compact('teachers'));
    }

    public function manageCourse(Request $request)
    {
        $my_courses=$request->user()->my_courses()->get();
        return view('public.instructor.instructor-manage-course',compact('my_courses'));
    }

    public function order()
    {
        return view('public.instructor.instructor-order');
    }

    public function payout()
    {
        return view('public.instructor.instructor-payout');
    }

    public function review()
    {

        $comments = Comment::whereHasMorph(
            'commenttable',
            [Book::class, Course::class],
            function ($query) {
                $query->where('user_id', auth()->id());
            }
        )->with(['user'])->get();
        return view('public.instructor.instructor-review',compact('comments'));
    }

    public function single()
    {
        return view('public.instructor.instructor-single');
    }

    public function studentList(Request $request)
    {
        $students=User::whereHas('courses',function($query) use($request){
            $query->where('courses.user_id',$request->user()->id);
        })->get();
        return view('public.instructor.instructor-studentlist',compact('students'));
    }
}
