<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('front.company.edit');
    }

    public function password()
    {
        return view('front.company.password');
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
            'company' => 'required',
            'phone' => 'required',
            'description' => 'required',
        ];

        $user = User::find($request->id);

        $messages = [
            'company.required'     => 'Şirkət adını daxil edin.',
            'phone.required'       => 'Şirkət adını daxil edin.',
            'description.required' => 'Əlaqə telefonu daxil edin.',
        ];

        $this->validate($request, $rules, $messages);

        $user->company        = $request->company;
        $user->field          = $request->field;
        $user->description    = $request->description;
        $user->phone          = $request->phone;
        $user->address        = $request->address;
        $user->website        = $request->website;
        $user->linkedin       = $request->linkedin;
        $user->facebook       = $request->facebook;
        $user->success_email  = $request->success_email;
        $user->fail_email     = $request->fail_email;
        $user->save();

        return redirect()->back()->with('success', 'Dəyişikliklər yadda saxlanıldı');
    }


    public function logo(Request $request){
        if($request->hasFile('logo')){
            $logo = $request->logo;
            $user = User::find($request->id);

            // Remove old logo
            $path = substr($user->logo, 1);
            File::delete($path);
            
            $slug = Str::slug($request->company, '-');

            $file_name = $slug.'-logo.'.$logo->extension();

            $path = public_path('uploads/companies/');
            $url = '/uploads/companies/'.$file_name;
            $logo->move($path, $url);

            $user->logo = $url;
            $user->save();

            return redirect()->back()->with('success', 'Dəyişikliklər yadda saxlanıldı');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function stats(){
        $company = User::with('vacancies')->find(auth()->user()->id);
        return view('front.company.stats', compact('company'));
    }
}
