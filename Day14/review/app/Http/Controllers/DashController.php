<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
}
