<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminPodcast extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $podcasts = Podcast::latest()->paginate(15);

        return view('admin.componnets.Podcast', compact('podcasts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.podcasts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:podcasts,slug',
            'description' => 'nullable|string',

            'audio_file' => 'required|file|mimes:mp3,wav,ogg,m4a|max:51200',

            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',

            'duration' => 'nullable|integer',
            'language' => 'nullable|string|max:10',
            'published_at' => 'nullable|date',

            'status' => 'required|in:draft,published,archived',

            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
        ]);

        $audioPath = $request->file('audio_file')
            ->store('podcasts/audio', 'public');

        $coverPath = null;

        if ($request->hasFile('cover_image')) {
            $coverPath = $request->file('cover_image')
                ->store('podcasts/covers', 'public');
        }

        Podcast::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'description' => $request->description,

            'audio_file' => $audioPath,
            'cover_image' => $coverPath,

            'duration' => $request->duration,
            'language' => $request->language ?? 'fa',
            'published_at' => $request->published_at,

            'status' => $request->status,

            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,

            'play_count' => 0,
            'download_count' => 0,
        ]);

        return redirect()
            ->route('admin.podcasts.index')
            ->with('success', 'پادکست با موفقیت ایجاد شد.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $podcast = Podcast::findOrFail($id);

        return view('admin.podcasts.show', compact('podcast'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $podcast = Podcast::findOrFail($id);

        return view('admin.podcasts.edit', compact('podcast'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $podcast = Podcast::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',

            'slug' => 'required|string|max:255|unique:podcasts,slug,' . $podcast->id,

            'description' => 'nullable|string',

            'audio_file' => 'nullable|file|mimes:mp3,wav,ogg,m4a|max:51200',

            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',

            'duration' => 'nullable|integer',
            'language' => 'nullable|string|max:10',
            'published_at' => 'nullable|date',

            'status' => 'required|in:draft,published,archived',

            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
        ]);

        if ($request->hasFile('audio_file')) {
            $podcast->audio_file = $request->file('audio_file')
                ->store('podcasts/audio', 'public');
        }

        if ($request->hasFile('cover_image')) {
            $podcast->cover_image = $request->file('cover_image')
                ->store('podcasts/covers', 'public');
        }

        $podcast->title = $request->title;
        $podcast->slug = $request->slug;
        $podcast->description = $request->description;
        $podcast->duration = $request->duration;
        $podcast->language = $request->language ?? 'fa';
        $podcast->published_at = $request->published_at;
        $podcast->status = $request->status;
        $podcast->meta_title = $request->meta_title;
        $podcast->meta_description = $request->meta_description;

        $podcast->save();

        return redirect()
            ->route('admin.podcasts.index')
            ->with('success', 'پادکست با موفقیت ویرایش شد.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $podcast = Podcast::findOrFail($id);

        $podcast->delete();

        return redirect()
            ->route('admin.podcasts.index')
            ->with('success', 'پادکست با موفقیت حذف شد.');
    }
}