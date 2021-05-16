<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($type)
    {
        if($type == 'applicant') return view('front.applicant.password');
        else return view('front.company.password');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rules = [
            'current_password'     => 'required',
            'new_password'         => 'required',
            'confirm_new_password' => 'required'
        ];

        $messages = [
            'current_password.required'      => 'Hazırki şifrənizi daxil edin.',
            'new_password.required'          => 'Yeni şifrənizi daxil edin.',
            'confirm_new_password.required'  => 'Yeni şifrənizin təkrarını daxil edin.',
        ];

        $this->validate($request, $rules, $messages);

        $user = User::find($request->id);

        if(!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('error', 'Şifrəniz doğru deyil');
        }

        if($request->new_password != $request->confirm_new_password) {
            return redirect()->back()->with('error', 'Yeni şifrələr eyni deyil');
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->back()->with('success', 'Şifrəniz uğurla yeniləndi');
        
    }

}
