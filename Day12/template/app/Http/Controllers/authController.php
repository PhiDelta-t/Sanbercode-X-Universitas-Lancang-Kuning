<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function form()
    {
        return view('pages.biodata');
    }
    public function store(Request $request)
    {
        $name = $request->input('name');
        $bio = $request->input('bio');
        return view('pages.home', ['name' => $name, 'bio' => $bio]);
    }
}
