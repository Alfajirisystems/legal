<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TppdClaimsController extends Controller
{
    //
    public function index()
    {
        return view('admin.tppd_claims');
    }
}
