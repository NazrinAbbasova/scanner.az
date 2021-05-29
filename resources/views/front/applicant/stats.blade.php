@extends('front.layout.master')
@section('title', auth()->user()->firstname.' '.auth()->user()->lastname)
@section('content')
<section class="profile margin-page">
    <div class="container">
        <div class="row">
            @include('front.applicant.sidebar')
            <div class="col-lg-9">
                <h5>Ümumi statistika</h5>
                <div class="our-achievement applicant">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-achievement wow fadeInUp" data-wow-delay=".2s">
                            <i class="fal fa-file"></i>
                            <h3 class="counter"><span id="secondo1" class="countup" cup-end="264">264</span>K+</h3>
                            <p>Müraciət etdiyim vakansiyaların sayı</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-achievement wow fadeInUp" data-wow-delay=".4s">
                            <i class="fal fa-file-check"></i>
                            <h3 class="counter"><span id="secondo2" class="countup" cup-end="100">100</span>K+</h3>
                            <p>Uğurla keçdiyim vakansiyaların sayı</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-achievement wow fadeInUp" data-wow-delay=".4s">
                            <i class="fal fa-percent"></i>
                            <h3 class="counter"><span id="secondo2" class="countup" cup-end="83">83</span>%</h3>
                            <p>Ümumi vakansiyalara uyğunluq faizi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('load')
<link rel="stylesheet" href="{{ asset('static/front/css/icons.min.css') }}" />
<link rel="stylesheet" href="{{ asset('static/front/css/profile.css') }}">
<link rel="stylesheet" href="{{ asset('static/front/css/statistics.css') }}">
@endsection