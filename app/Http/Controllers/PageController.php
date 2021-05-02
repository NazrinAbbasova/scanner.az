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

    public function about(){
        return view('front.about');
    }

    public function how_it_works(){
        return view('front.how-it-works');
    }

    public function contact(){
        return view('front.contact');
    }

}
