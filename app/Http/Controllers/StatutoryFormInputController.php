<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatutoryFormInputController extends Controller
{
    //
    public function index()
    {
        return view('admin.form_statutory');
    }
}
