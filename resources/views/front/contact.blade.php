@extends('front.layout.master')
@section('title', 'Əlaqə')
@section('content')
<section class="contact">
    <div class="container">
        <div class="contact-text">
            <h1>Əlaqə</h1>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                alteration in some form.
            </p>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="contact-form">
                    <form>
                        <div class="col-md-12">
                            <div class="form-group">
                                <!-- <label for="name">Adınız</label> -->
                                <input type="text" placeholder="Adınızı daxil edin">
                                <!-- <label for="subject">Başlıq</label> -->
                                <input type="text" placeholder="Başlığı daxil edin">
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <!-- <label for="email">Email</label> -->
                                <input type="email" placeholder="Emailinizi daxil edin">
                                <!-- <label for="mobile">Mobil nömrə</label> -->
                                <input type="text" placeholder="Nömrənizi daxil edin">
                            </div>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="col-md-3">
                            <button>Göndər</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info">
                    <div class="single-info">
                        <i class="fal fa-envelope"></i>
                        <ul>
                            <li><span>Mail Us</span></li>
                            <li><a href="mailto:support@yourmail.com">support@yourmail.com</a></li>
                            <li><a href="mailto:contact@yourmail.com">contact@yourmail.com</a></li>
                        </ul>
                    </div>
                    <div class="single-info">
                        <i class="fal fa-phone-alt"></i>
                        <ul>
                            <li><span>Call Us</span></li>
                            <li><a href="#">+1 756 445 5658</a></li>
                            <li><a href="#">+1 125 458 5555</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('load')
    <link rel="stylesheet" href="{{ asset('static/front/css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('static/front/css/icons.css') }}">
@endsection