<?php

namespace App\Http\Controllers;

use App\Mail\PasswordReset;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function forgot(){
        if(auth()->check()) return redirect()->route('home');
        
        return view('front.auth.forgot');
    }

    public function submit(Request $request) {
        $rules = [
            'email'     => 'required',
        ];

        $messages = [
            'email.required'     => 'E-mail adresinizi qeyd edin.',
        ];

        $this->validate($request, $rules, $messages);

        $user = User::where('email', $request->email)->first();

        if(!$user) {
            return redirect()->route('home')->with('error', 'İstifadəçi tapılmadı');
        }

        Mail::to($user->email)->send(new PasswordReset($user->remember_token));

        return redirect()->route('home')->with('success', 'Təlimatlar e-mail adresinizə göndərildi.');
    }

    public function verify($token){
        $user = User::where('remember_token', $token)->first();

        if(!$user) {
            return redirect()->route('home')->with('error', 'İstifadəçi tapılmadı');
        }

        $user->email_verified_at = now();
        $user->save();

        return redirect()->route('home')->with('success', 'E-mail adresiniz uğurla təsdiqləndi');
    }

    public function reset($token){
        if(auth()->check()) return redirect()->route('home');

        $user = User::where('remember_token', $token)->first();

        if(!$user) {
            return redirect()->route('home')->with('error', 'İstifadəçi tapılmadı');
        }

        return view('front.auth.reset', compact('token'));
    }

    public function new_password(Request $request){
        $rules = [
            'password'         => 'required',
            'password_repeat'  => 'required',
        ];

        $messages = [
            'password.required'         => 'Şifrənizi daxil edin.',
            'password_repeat.required'  => 'Şifrənizin təkrarını daxil edin.',
        ];

        $this->validate($request, $rules, $messages);

        $user = User::where('remember_token', $request->token)->first();

        if(!$user) {
            return redirect()->route('home')->with('error', 'İstifadəçi tapılmadı');
        }

        if($request->password != $request->password_repeat){
            return redirect()->route('home')->with('error', 'Daxil etdiyiniz şifələr eyni deyil');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login')->with('success', 'Şifrəniz uğurla yeniləndi');

    }

}
