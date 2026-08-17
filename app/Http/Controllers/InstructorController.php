<?php

namespace App\Http\Controllers;

use App\Models\Book;
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
        return view('public.instructor.instructor-create-course');
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
        return view('public.instructor.instructor-list');
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
