<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.contact');
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
        $rules = [
            'name'    => 'required',
            'subject' => 'required',
            'phone'   => 'required',
            'email'   => 'required',
            'message' => 'required',
        ];

        $messages = [
            'name.required'    => 'Adınızı qeyd edin.',
            'subject.required' => 'Başlığı daxil edin.',
            'phone.required'   => 'Əlaqə telefonu qeyd edin.',
            'email.required'   => 'E-mail adresinizi qeyd edin.',
            'message.required' => 'Mətn daxil edin.',
        ];
        
        $this->validate($request, $rules, $messages);

        Mail::to($request->email)->send(new Contact($request));

        return redirect()->back()->with('success', 'Sorğunuz qeydə alındı');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
