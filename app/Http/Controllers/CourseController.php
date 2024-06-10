<?php

namespace App\Http\Controllers;

use App\Models\ShortCourse;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = ShortCourse::all();
        return view('internationaloffice.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('internationaloffice.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image_url' => 'required|url',
            'description' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'benefit1' => 'required|string',
            'benefit2' => 'required|string',
            'benefit3' => 'required|string',
        ]);

        $shortCourse = new ShortCourse();
        $shortCourse->slug = Str::slug($request->title, '-');
        $shortCourse->title = $request->title;
        $shortCourse->content = $request->content;
        $shortCourse->image_url = $request->image_url;
        $shortCourse->description = $request->description;
        $shortCourse->date = $request->date;
        $shortCourse->time = $request->time;
        $shortCourse->benefit1 = $request->benefit1;
        $shortCourse->benefit2 = $request->benefit2;
        $shortCourse->benefit3 = $request->benefit3;
        $shortCourse->save();

        return redirect()->route('courses.index')->with('success', 'Short course created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $course = ShortCourse::where('slug', $slug)->firstOrFail();
        
        return view('internationaloffice.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $course = ShortCourse::where('slug', $slug)->firstOrFail();
    
        return view('internationaloffice.courses.edit', compact('course')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $course = ShortCourse::where('slug', $slug)->firstOrFail();

        // $request->validate([
        //     'title' => 'string|max:255',
        //     'content' => 'string',
        //     'image_url' => 'url',
        //     'description' => 'string',
        //     'date' => 'date',
        //     'time' => 'date_format:H:i',
        //     'benefit1' => 'string|max:255',
        //     'benefit2' => 'string|max:255',
        //     'benefit3' => 'string|max:255',
        // ]);

        $course->title = $request->title ?? $course->title;
        $course->content = $request->content ?? $course->content;
        $course->image_url = $request->image_url ?? $course->image_url;
        $course->description = $request->description ?? $course->description;
        $course->date = $request->date ?? $course->date;
        $course->time = $request->time ?? $course->time;
        $course->benefit1 = $request->benefit1 ?? $course->benefit1;
        $course->benefit2 = $request->benefit2 ?? $course->benefit2;
        $course->benefit3 = $request->benefit3 ?? $course->benefit3;

        $course->save();

        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $course = ShortCourse::where('slug', $slug)->firstOrFail();
        $course->delete();
        
        return redirect()->route('courses.index')->with('success', 'Short course deleted successfully.');
    }
}
