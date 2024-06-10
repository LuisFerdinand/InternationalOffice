<?php

namespace App\Http\Controllers;


use App\Models\ShortCourse;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class ShortCourseController extends Controller
{
    public function index()
    {
        return view('internationaloffice.shortcourses',  ['shortcourses' => ShortCourse::all()]
    );  
    }

    public function show($slug)
    {
        $shortCourse = ShortCourse::where('slug', $slug)->firstOrFail();

        // Debugging output
        if (!$shortCourse) {
            abort(404, 'Short Course not found');
        }
        
        return view('internationaloffice.shortcourse', ['shortCourse' => $shortCourse]);
    }
    public function create()
    {
        return view('internationaloffice.short_course_create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:short_courses,slug',
            'image_url' => 'required|url',
            'content' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'benefit1' => 'required|string',
            'benefit2' => 'required|string',
            'benefit3' => 'required|string',
        ]);

        ShortCourse::create($validatedData);

        return redirect('/')->with('success', 'Short course created successfully!');
    }
    // public function view(ShortCourse $course){
        
    //     if (!$course) {
    //         abort(404);
    //     }

    //     return view('internationaloffice.shortcourse', ['shortcourse' => $course]);

        
    // }


}
