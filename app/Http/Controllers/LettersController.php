<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Letters;
use Illuminate\Support\Facades\Validator;

class LettersController extends Controller
{
    //
    public function index()
    {

        $letters = Letters::all();
        return view('admin.letters.index', compact('letters'));
      
    }

    public function create()
    {
        return view('admin.letters.create');
    }

    public function store(Request $request)
    {
        $letter = new Letters();
        $letter->date = $request->dateOfLoss;
        $letter->insuredParty = $request->insuredParty;
        $letter->natureOfClaim = $request->natureOfClaim;
        $letter->autherOfClaim = $request->autherOfClaim;
        $letter->files = $request->input('files');

        $filenames = [];

        foreach ($request->file('files') as $file) {
            $filename = $file->store('uploads'); // Adjust the storage path as needed
            $filenames[] = $filename;
        }

        try {
            $letter->files = json_encode($filenames);
            $letter->save();
            toastr()->success('Letter added successfully!', 'Success');
            return redirect()->route('letters.index');
        } catch (\Exception $e) {
            // Handle the exception
            toastr()->error($e->getMessage(), 'Error');
            return redirect()->back()->with('error', $e->getMessage());
        }
        
        
    }   

    public function show($id)
    {
        $letter = Letters::find($id);
        return view('admin.letters.show', compact('letter'));
    }

    public function edit($id)
    {
        $letter = Letters::find($id);
        return view('admin.letters.edit', compact('letter'));
    }

    public function update(Request $request, $id)
    {
        $letter = Letters::find($id);
        $letter->date = $request->dateOfLoss;
        $letter->insuredParty = $request->insuredParty;
        $letter->natureOfClaim = $request->natureOfClaim;
        $letter->autherOfClaim = $request->autherOfClaim;
        $letter->files = $request->input('files');

        $filenames = [];

        foreach ($request->file('files') as $file) {
            $filename = $file->store('uploads'); // Adjust the storage path as needed
            $filenames[] = $filename;
        }

        try {
            $letter->files = json_encode($filenames);
            $letter->save();
            toastr()->success('Letter updated successfully!', 'Success');
            return redirect()->route('letters.index');
        } catch (\Exception $e) {
            // Handle the exception
            toastr()->error($e->getMessage(), 'Error');
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $letter = Letters::find($id);
        $letter->delete();
        toastr()->success('Letter deleted successfully!', 'Success');
        return redirect()->route('letters.index');
    }


}
