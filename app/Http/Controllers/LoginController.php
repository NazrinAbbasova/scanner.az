<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('front.auth.login');
    }

    public function attempt(Request $request){
        return $request->all();
    }
}