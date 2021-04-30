<?php

namespace App\Http\Controllers;

use App\Mail\PasswordReset;
use App\Mail\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function forgot(){
        return view('front.auth.forgot');
    }

    public function reset($token){
        return $token;
    }

}
