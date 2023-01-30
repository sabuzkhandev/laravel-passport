<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function(Request $request){

        $request->validate([
            'email'     => ['required','email'],
            'password'  => ['required']
        ]);
    }
}
