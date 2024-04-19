<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttorneyDetailsController extends Controller
{
    //
    public function index()
    {
        return view('admin.attorney_details');
    }
}
