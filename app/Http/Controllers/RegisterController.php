<?php

namespace App\Http\Controllers;

use App\Mail\VerifyEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index(){
        if(auth()->check()) return redirect()->route('home');
        return view('front.auth.register');
    }

    public function store(Request $request) {

        // Applicant registration

        if($request->type == 'applicant'){

            $rules = [
                'firstname' => 'required',
                'lastname'  => 'required',
                'email'     => 'required|unique:users',
                'password'  => 'required',
            ];

            $messages = [
                'firstname.required' => 'Adınızı qeyd edin.',
                'lastname.required'  => 'Soyadınzı qeyd edin.',
                'email.required'     => 'E-mail adresinizi qeyd edin.',
                'email.unique'       => 'E-mail adresi başqa hesabda istifadə edilir.',
                'password.required'  => 'Şifrənizi daxil edin.',
            ];

            $this->validate($request, $rules, $messages);

            $user = new User;
            $user->firstname      = $request->firstname;
            $user->lastname       = $request->lastname;
            $user->email          = $request->email;
            $user->password       = Hash::make($request->password);
            $user->type           = 'applicant';
            $user->remember_token = Str::random(32);
            $user->premium        = null;
            $user->save();
            
        } else {
            $rules = [
                'company' => 'required',
                'email'     => 'required|unique:users',
                'password'  => 'required',
            ];

            $messages = [
                'company.required'   => 'Şirkət adını qeyd edin.',
                'email.required'     => 'E-mail adresinizi qeyd edin.',
                'email.unique'       => 'E-mail adresi başqa hesabda istifadə edilir.',
                'password.required'  => 'Şifrənizi daxil edin.',
            ];

            $this->validate($request, $rules, $messages);

            $user = new User;
            $user->company      = $request->company;
            $user->email        = $request->email;
            $user->phone        = $request->phone ?? null;
            $user->password     = Hash::make($request->password);
            $user->type         = 'company';
            $user->remember_token = Str::random(32);
            $user->save();
        }

        Mail::to($user->email)->send(new VerifyEmail($user->remember_token));

        return redirect()->route('home')->with('success', 'text');
    }
}
