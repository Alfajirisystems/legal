<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettlementsController extends Controller
{
    //
    public function index()
    {
        return view('admin.settlements');
    }
}
