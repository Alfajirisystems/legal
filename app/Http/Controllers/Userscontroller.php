<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Userscontroller extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

   
}
