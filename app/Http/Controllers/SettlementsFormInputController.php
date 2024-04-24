<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettlementsFormInputController extends Controller
{
    //
    public function index()
    {
        return view('admin.form_settlements');
    }
}
