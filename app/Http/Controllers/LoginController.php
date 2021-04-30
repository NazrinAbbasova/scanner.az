<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        if(auth()->check()) return redirect()->route('home');


        return view('front.auth.login');
    }

    public function attempt(Request $request){

        $rules = [
            'email'     => 'required',
            'password'  => 'required',

        ];

        $messages = [

            'email.required'     => 'E-mail adresinizi daxil edin.',
            'password.required'  => 'Şifrənizi daxil edin.'

        ];

        $this->validate($request, $rules, $messages);
        
        $user = User::where('email', $request->email)->first();

        if(!$user){
            return back()->with('error', 'İstifadəçi tapılmadı');
        }

        $credentials = $request->only('email', 'password');

        // $remember = $request->has('remember') ? true : false;

        if(!$user->email_verified_at) {
            return back()->with('error', 'E-mail adresiniz təsdiqlənməyib');
        }

        if(Auth::attempt($credentials)){

            return redirect()->intended('/');
        }

        return back()->with('error', 'E-mail və ya şifrə yanlışdır');
        
    }


    public function logout(){
        auth()->logout();

        return back();
    }
}
