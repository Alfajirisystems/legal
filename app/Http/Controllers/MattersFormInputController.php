<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MattersFormInputController extends Controller
{
    //
    public function index()
    {
        return view('admin.form_matters');
    }
}
