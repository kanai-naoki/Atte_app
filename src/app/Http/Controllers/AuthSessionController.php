<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthSessionController extends Controller
{
    public function attendance()
    {
        return view('attendance');
    }
}
