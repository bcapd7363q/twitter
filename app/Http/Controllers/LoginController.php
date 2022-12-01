<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function LoginController($id)
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
}
