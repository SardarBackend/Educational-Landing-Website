<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\Course;
use Illuminate\Http\Request;

class AdminCourseChapters extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $course)
    {
        // dd($course);
        $course=Course::findOrFail($course);
        $course->chapters()->latest();
        if ($keyword=request('search')) {
            $course = $course->where('title', 'LIKE', "%{$keyword}%")->orWhere('discription', 'LIKE', "%{$keyword}%")->orWhere('id', 'LIKE', "%{$keyword}%");
        }
        $users=$course->paginate(10);
        return view('admin.componnets.Chapters',compact('users','course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
