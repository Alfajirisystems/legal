<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SummonsPlaintsFormInputController extends Controller
{
    //
    public function index()
    {
        return view('admin.form_summons_plaints');
    }
}
