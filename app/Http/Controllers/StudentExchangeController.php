<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\StudentExchange;


class StudentExchangeController extends Controller
{
    public function index()
    {
        $studentExchanges = StudentExchange::all();
        return view('internationaloffice.studentexchanges', ['studentExchanges' => $studentExchanges]);
    }

    public function show($slug)
    {
        $studentExchange = StudentExchange::where('slug', $slug)->firstOrFail();
        return view('internationaloffice.studentexchange', ['studentExchange' => $studentExchange]);
    }

    public function create()
    {
        return view('internationaloffice.exchange_create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:student_exchanges,slug',
            'image_url' => 'required|url',
            'content' => 'required|string',
            'time' => 'required|string',
            'program_details' => 'required|string',
            'date' => 'required|date',
            'benefit' => 'required|string',
            'description' => 'required|string',
        ]);

        StudentExchange::create($validatedData);
        // Set other fields here

        return redirect('/')->with('success', 'Student exchange created successfully!');
    }

    // public function view(StudentExchange $exchange){
        
    //     if (!$exchange) {
    //         abort(404);
    //     }

    //     return view('internationaloffice.studentexchange', ['studentExchanges' => $exchange]);

        
    // }
}
