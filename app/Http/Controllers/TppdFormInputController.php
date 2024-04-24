<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TppdFormInputController extends Controller
{
    //
    public function index()
    {
        return view('admin.form_tppd_claims');
    }
}
