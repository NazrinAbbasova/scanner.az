<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
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


    public function pdf(){
        $pdf = PDF::loadView('pdf.resume');
        return $pdf->download('invoice.pdf');
    }


    public function vacancies(){
        return view('dashboard.vacancy.create');
    }

}
