<?php

namespace App\Http\Controllers;

use App\Models\System;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SystemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('systems.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'url' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('local')->put('images', $request->file('image'));
            $validated['image'] = $request->file('image')->hashName();
        }

        $system = System::create($validated);
        
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(System $system)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(System $system)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, System $system)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(System $system)
    {
        //
    }
}
