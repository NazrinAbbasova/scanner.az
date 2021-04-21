<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;

class LanguageController extends Controller
{

    public function index(){
        $languages = Language::all();

        return view('dashboard.language.index', compact('languages'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $l = new Language;

        $l->name = $request->name;
        $l->slug = $request->slug;

        $l->save();

        return redirect()->route('dashboard.languages')->with('success', 'Information created successfully');
    }

 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Language $l)
    {
        $languages = Language::all();
        return view('dashboard.language.edit', compact('l', 'languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Language $l)
    {
        $l->name = $request->name;
        $l->slug = $request->slug;

        $l->save();

        return back()->with('success', 'Information updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Language $l)
    {
        $l->delete();

        return back()->with('success', 'Information deleted successfully');
    }
}
