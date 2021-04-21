<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use Spatie\TranslationLoader\LanguageLine;
class TranslationController extends Controller
{
    public function index(){
        $translations = LanguageLine::all();
        $languages = Language::all();
        return view('dashboard.translation.index', compact('translations', 'languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $languages = Language::all();

        foreach ($languages as $lang) {
            $text[$lang->slug] = request($lang->slug);
        }

        $t        = new LanguageLine;
        $t->group = $request->group;
        $t->key   = $request->key;
        $t->text  = $text;

        $t->save();

        return redirect()->route('dashboard.translations')->with('success', 'Information created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(LanguageLine $t)
    {
        $languages = Language::all();
        return view('dashboard.translation.edit', compact('t', 'languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LanguageLine $t)
    {
        $languages = Language::all();
        
        foreach ($languages as $lang) {
            $text[$lang->slug] = request($lang->slug);
        }

        $t->text  = $text;

        $t->save();

        return back()->with('success', 'Information updated successfully');
    }


}
