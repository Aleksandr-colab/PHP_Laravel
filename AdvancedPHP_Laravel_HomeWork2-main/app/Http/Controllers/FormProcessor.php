<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessor extends Controller
{
    public function index()
    {
        return view('userform');
    }

    public function store(Request $request)
    {
        $userData = [ 'user_name' => $request->user_name, 'user_surname' => $request->user_surname, 'email' => $request->email];

//        return response()->json($userData);
        return view('hiuser', ['user' => $userData]);
    }
}
