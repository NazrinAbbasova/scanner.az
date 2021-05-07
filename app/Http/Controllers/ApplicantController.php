<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        if(auth()->user()->type == 'applicant') return view('front.applicant.edit');

        return abort(403);
    }

    public function password()
    {
        return view('front.applicant.password');
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
            'firstname' => 'required',
            'lastname'  => 'required',
        ];

        $messages = [
            'firstname.required' => 'Adınızı qeyd edin.',
            'lastname.required'  => 'Soyadınzı qeyd edin.',
        ];

        $user = User::find($request->id);
        
        $this->validate($request, $rules, $messages);

        $user->firstname = $request->firstname;
        $user->lastname  = $request->lastname;
        $user->save();

        return redirect()->back()->with('success', 'Dəyişikliklər yadda saxlanıldı');
    }

}
