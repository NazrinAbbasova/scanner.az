@extends('front.layout.master')
@section('title', 'Haqqımızda')
@section('content')
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about-text">
                    <h1>Haqqımızda</h1>
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus autem voluptas ea deleniti
                        eius
                        veniam
                        quas similique rem officia. Vitae minima optio saepe expedita labore enim quos quasi,
                        temporibus
                        quibusdam.
                        <br><br>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo natus fugiat expedita porro
                        tenetur? Fuga nemo, numquam atque eligendi rem iste excepturi quas itaque eum ad, aliquid
                        asperiores officia sequi?
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-img">
                    <img src="{{ asset('static/front/images/auth-img.png') }}" alt="">
                </div>
            </div>

        </div>
    </div>
</section>
@endsection

@section('load')
    <link rel="stylesheet" href="{{ asset('static/front/css/about.css') }}">
@endsection