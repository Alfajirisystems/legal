<?php

namespace App\Http\Controllers;

use App\Models\Courts;
use Illuminate\Http\Request;

class CourtsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $courts = Courts::all();
        return view('admin.courts.index', compact('courts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.courts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required|unique:courts|max:255',
            'location' => 'required',
        ]);

        $court = new Courts();
        $court->name = $request->name;
        $court->location = $request->location;

        try {
            $court->save();
            toastr()->success('Court created successfully!', 'Success');
            return redirect()->route('courts.index');
        } catch (\Exception $e) {
            toastr()->error($e->getMessage(), 'Error');
            return redirect()->back()->with('error', 'Error creating court');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Courts $courts)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Courts $court)
    {
        //
        return view('admin.courts.edit', compact('court'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Courts $courts)
    {
        //
        $validated = $request->validate([
            'name' => 'required|unique:courts|max:255',
            'location' => 'required',
        ]);

        $courts->name = $request->name;
        $courts->location = $request->location;

        try {
            $courts->save();
            toastr()->success('Court updated successfully!', 'Success');
            return redirect()->route('courts.index');
        } catch (\Exception $e) {
            toastr()->error($e->getMessage(), 'Error');
            return redirect()->back()->with('error', 'Error updating court');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Courts $court)
    {
        //
        try {
            $court->delete();
            toastr()->success('Court deleted successfully!', 'Success');
            return redirect()->route('courts.index');
        } catch (\Exception $e) {
            toastr()->error($e->getMessage(), 'Error');
            return redirect()->back()->with('error', 'Error deleting court');
        }
    
    }
}
