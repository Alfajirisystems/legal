<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatutoryNoticesController extends Controller
{
    //
    public function index()
    {
        return view('admin.statutory_notices');
    }
}
