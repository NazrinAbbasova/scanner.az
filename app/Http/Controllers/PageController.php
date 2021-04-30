<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function locale($locale){
        session()->put('locale', $locale);
        return back();
    }

    public function dashboard(){
        return view('dashboard.index');
    }

}
