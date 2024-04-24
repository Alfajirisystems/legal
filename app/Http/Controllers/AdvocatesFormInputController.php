<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvocatesFormInputController extends Controller
{
    //
    public function index()
    {
        return view('admin.form_advocates');
    }
}
