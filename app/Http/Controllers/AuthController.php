<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function forgot(){
        return view('front.auth.forgot');
    }

    public function reset($token){
        return $token;
    }
}
