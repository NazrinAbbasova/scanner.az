<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        return view('front.applicant.edit');
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

    public function photo(Request $request){
        if($request->hasFile('photo')){
            $photo = $request->photo;

            $file_name = 'applicant-'.$request->id.'.'.$photo->extension();

            $photo->storeAs('public/applicants', $file_name);

            $url  = '/storage/applicants/'.$file_name;
            $user = User::find($request->id);
            $user->photo = $url;
            $user->save();

            return redirect()->back()->with('success', 'Dəyişikliklər yadda saxlanıldı');
        }

        return back();
    }

}
