<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    public function register()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $user = new user();
        $user->industry = request('industry');
        $user->experience_level = request('experience');
        $user->employement_type = request('employement');
        $user->save();
        return view('user_create');
    }
}
