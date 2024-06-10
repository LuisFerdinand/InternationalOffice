<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\StudentExchange;

class ExchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exchanges = StudentExchange::all();
        return view('internationaloffice.exchanges.index', compact('exchanges'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('internationaloffice.exchanges.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image_url' => 'required|url',
            'content' => 'required|string',
            'time' => 'required|date_format:H:i',
            'program_details' => 'required|string',
            'date' => 'required|date',
            'benefit' => 'required|string',
            'description' => 'required|string',
        ]);

        $exchange = new StudentExchange();
        $exchange->title = $request->title;
        $exchange->slug = Str::slug($request->title, '-');
        $exchange->image_url = $request->image_url;
        $exchange->content = $request->content;
        $exchange->time = $request->time;
        $exchange->program_details = $request->program_details;
        $exchange->date = $request->date;
        $exchange->benefit = $request->benefit;
        $exchange->description = $request->description;
        $exchange->save();

        return redirect()->route('exchanges.index')
                        ->with('success', 'Student exchange created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $exchange = StudentExchange::where('slug', $slug)->firstOrFail();
        
        return view('internationaloffice.exchanges.show', compact('exchange'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $exchange = StudentExchange::where('slug', $slug)->firstOrFail();
        
        return view('internationaloffice.exchanges.edit', compact('exchange')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $exchange = StudentExchange::where('slug', $slug)->firstOrFail();

        $exchange->update([
            'title' => $request->title ?? $exchange->title,
            'content' => $request->content ?? $exchange->content,
            'image_url' => $request->image_url ?? $exchange->image_url,
            'description' => $request->description ?? $exchange->description,
            'date' => $request->date ?? $exchange->date,
            'time' => $request->time ?? $exchange->time,
            'benefit1' => $request->benefit1 ?? $exchange->benefit1,
            'benefit2' => $request->benefit2 ?? $exchange->benefit2,
            'benefit3' => $request->benefit3 ?? $exchange->benefit3,
        ]);

        return redirect()->route('exchanges.index')->with('success', 'Exchange updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $exchange = StudentExchange::where('slug', $slug)->firstOrFail();
        $exchange->delete();
        
        return redirect()->route('exchanges.index')->with('success', 'Exchange deleted successfully.');
    }
    
}
