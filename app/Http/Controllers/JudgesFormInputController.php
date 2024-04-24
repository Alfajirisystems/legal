<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JudgesFormInputController extends Controller
{
    //
    public function index()
    {
        return view('admin.form_judges');
    }
}
