<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Models\Course;
use Illuminate\Http\Request;

class AdminCourse extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Course::query();
        if ($keyword=request('search')) {
            $users = $users->where('title', 'LIKE', "%{$keyword}%")->orWhere('discription', 'LIKE', "%{$keyword}%")->orWhere('id', 'LIKE', "%{$keyword}%");
        }
        $users=$users->paginate(10);
        return view('admin.componnets.Course',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=categories::where('categorytable_type',Course::class)->get();
        return view('admin.componnets.Course_p',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cat=Course::find($id);
        $categories =categories::where('categorytable_type',Course::class)->get();
        return view('admin/componnets/Course_e', compact('cat','categories'));
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
        Course::find($id)->delete();
        return back();
    }
}
