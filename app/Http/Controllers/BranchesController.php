<?php

namespace App\Http\Controllers;

use App\Models\Branches;
use Illuminate\Http\Request;

class BranchesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $branches = Branches::all();
        return view('admin.branches.index', compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view ('admin.branches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:branches|max:255',
            'location' => 'required',
        ]);

        $branch = new Branches();
        $branch->name = $request->name;
        $branch->location = $request->location;

        try {
            $branch->save();
            toastr()->success('Branch created successfully!', 'Success');
            return redirect()->route('admin.branches.index');
        } catch (\Exception $e) {
            toastr()->error('Oops! Something went wrong!', 'Oops!');
            return redirect()->back()->with('error', 'Error creating branch');
        }
       
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Branches $branches)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branches $branches)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Branches $branches)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branches $branches)
    {
        //
    }
}
