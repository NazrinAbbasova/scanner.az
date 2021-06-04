<?php

namespace App\Http\Controllers;

use App\Models\Cv;
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

            $path = public_path('uploads/applicants/');
            $url = '/uploads/applicants/'.$file_name;
            $photo->move($path, $url);

            $user = User::find($request->id);
            $user->photo = $url;
            $user->save();

            return redirect()->back()->with('success', 'Dəyişikliklər yadda saxlanıldı');
        }

        return back();
    }


    public function stats(){
        $applicant = User::find(auth()->user()->id);
        return view('front.applicant.stats', compact('applicant'));
    }

    public function cv(){
        $cv = Cv::where('user_id', auth()->user()->id)->with('educations', 'experiences', 'languages', 'computer_skills', 'certificates')->first();
        if($cv) return view('front.cv.show', compact('cv'));
        else return redirect()->route('cv.create');
        
    }

    public function vacancies(){
        return view('front.applicant.vacancies');
    }

}
