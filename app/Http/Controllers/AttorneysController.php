<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttorneysController extends Controller
{
    //
    public function index()
    {
        return view('admin.attorney_list');
    }
}
