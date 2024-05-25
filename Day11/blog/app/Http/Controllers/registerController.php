<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function regist()
    {
        return view("register");
    }

    public function dashboard(Request $request)
    {
        $first = $request['first'];
        $last = $request['last'];
        $gender = $request['gender'];
        $natinality = $request['natinality'];
        $language = $request['language'];
        $bio = $request['first'];

        return view(
            "dashboard",
            [
                'first' => $first, 'last' => $last, 'gender' => $gender,
                'natinality' => $natinality, 'language' => $language, 'bio' => $bio
            ]
        );
    }
}
