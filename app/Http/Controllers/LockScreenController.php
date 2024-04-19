<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LockScreenController extends Controller
{
    //
    public function index()
    {
        return view('admin.auth_lockscreen');
    }
}
