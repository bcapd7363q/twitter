<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bikash extends Controller
{
    
    public function show($id)
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
    
}
