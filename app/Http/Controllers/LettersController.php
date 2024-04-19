<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LettersController extends Controller
{
    //
    public function index()
    {
        return view('admin.letters');
    }
}
