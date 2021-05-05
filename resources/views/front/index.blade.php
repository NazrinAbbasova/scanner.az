@extends('front.layout.master')
@section('content')
    <!-- Start Hero Area -->
  <section id="home" class="hero-area style3">
    <img src="{{ asset('static/front/images/hero/startup-shape.png') }}" alt="#" class="custom-shape">
    <!-- Single Slider -->
    <div class="hero-inner">
      <div class="container">
        <div class="row ">
          <div class="col-lg-6 co-12">
            <div class="home-slider">
              <div class="hero-text">
                <h1 class="wow fadeInUp" data-wow-delay=".5s">Doğru insan, doğru iş!</h1>
                <p class="wow fadeInUp" data-wow-delay=".7s">Scanner işə qəbul sistemində olan problemləri aradan
                  qaldırmaqla ən ədalətli və ən sürətli işə qəbul sistemi yaratmağa kömək olur. <br><br>
                  Əgər siz də bizə qoşulmaq istəyirsinizsə elə indi qeydiyyatdan keçin
                </p>
                <div class="button wow fadeInUp" data-wow-delay=".9s">
                  <a href="register.html" class="btn">Qeydiyyatdan keç</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
              <img src="{{ asset('static/front/images/img3.png') }}" alt="#">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ End Single Slider -->
  </section>
  <!--/ End Hero Area -->


  <!-- Start About Area -->
  <section id="about" class="app-description startup-page-style section white-bg">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title style3">
            <span class="wow fadeInDown" data-wow-delay=".2s">Haqqımızda</span>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-6 col-12">
          <div class="content wow fadeInLeft" data-wow-delay=".4s">
            <h2>Perfect for Operation HR <br>and Finance</h2>
            <p><strong>Niyə?</strong> - İşə qəbul sistemində olan problemləri aradan qaldırmaqla ən ədalətli və ən
              sürətli işə qəbul sistemi yaratmağa kömək oluruq.</p>
            <p><strong>Necə edirik?</strong>
            <ul>
              <li>Rəqəmsal həllər vasitəsilə</li>
              <li>Hər kəsə bərabər imkanlar yaratmaqla</li>
              <li>İşə qəbul xətalarını, zamanını və xərclərini azaltmaqla</li>
            </ul>
            </p>
            <p><strong>Nə edirik (məhsulumuz nədir?)?</strong> - Avtomatlaşmış online namizəd izləmə platforması
              vasitəsilə ən doğru namizədi təyin edirik.</p>
            <div class="button style3">
              <a href="{{ route('about') }}" class="btn">Daha çox</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="right wow fadeInRight" data-wow-delay=".6s">
            <img src="{{ asset('static/front/images/img2.png') }}" alt="#">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /End About Area -->

  <!-- Start Why Choose Area -->
  <section id="how-it-works" class="why-choose section">
    <div class="container">
      <div class="row row-cols-5">
        <div class="col-12">
          <div class="section-title style3">
            <span class="wow fadeInDown" data-wow-delay=".2s">Sistem necə İşləyir?</span>
            <h2 class="wow fadeInUp" data-wow-delay=".4s">Why Choose Xpeedo?</h2>
            <p class="wow fadeInUp" data-wow-delay=".6s">Lorem ipsum dolor sit amet, consectetur adipisicing
              elit sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <!-- Single Choose -->
          <div class="single-choose wow fadeInUp" data-wow-delay=".2s">
            <div class="icon">
              <!-- <i class="lni lni-cog"></i> -->
              1
            </div>
            <h3>Qeydiyyat</h3>
            <p>İşə qəbul mütəxəssisi vakansiyanı yaradır və namizədlərə olan tələbləri seçir
            </p>
          </div>
          <!-- End Single Choose -->
        </div>
        <div class="col">
          <!-- Single Choose -->
          <div class="single-choose wow fadeInUp" data-wow-delay=".2s">
            <div class="icon">
              <!-- <i class="lni lni-cog"></i> -->
              2
            </div>
            <h3>Paylaşım</h3>
            <p>İşə qəbul mütəxəssisi Scannerin verdiyi linki vakansiya elanlarında paylaşır</p>
          </div>
          <!-- End Single Choose -->
        </div>
        <div class="col">
          <!-- Single Choose -->
          <div class="single-choose wow fadeInUp" data-wow-delay=".4s">
            <div class="icon two">
              <!-- <i class="lni lni-phone-set"></i> -->
              3
            </div>
            <h3>Müraciət</h3>
            <p>Namizədlər linkə daxil olaraq müraciət formasını doldurur</p>
          </div>
          <!-- End Single Choose -->
        </div>
        <div class="col">
          <!-- Single Choose -->
          <div class="single-choose wow fadeInUp" data-wow-delay=".6s">
            <div class="icon three">
              <!-- <i class="lni lni-codepen"></i> -->
              4
            </div>
            <h3>Yoxlama</h3>
            <p>Namizədlərin göstəriciləri ilə vakansiya tələbləri arasında uyğunluq faizi sistem tərəfindən avtomatik
              hesablanır</p>
          </div>
          <!-- End Single Choose -->
        </div>
        <div class="col">
          <!-- Single Choose -->
          <div class="single-choose wow fadeInUp" data-wow-delay=".8s">
            <div class="icon four">
              <!-- <i class="lni lni-rocket"></i> -->
              5
            </div>
            <h3>Nəticə</h3>
            <p>Nəticə barədə məlumat işə qəbul mütəxəssisinin səhifəsində əks olunur</p>
          </div>
          <!-- End Single Choose -->
        </div>
      </div>
    </div>
  </section>
  <!-- End Why Choose Area -->


  <!-- Start Intro Video Area -->
  <section class="intro-video-area style3">
    <div class="container">
      <div class="video-inner ">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
            <div class="section-title">
              <span class="wow fadeInDown" data-wow-delay=".2s">Intro Video</span>
              <h2 class="wow fadeInUp" data-wow-delay=".4s">Watch our Platform</h2>
              <p class="wow fadeInUp" data-wow-delay=".6s">Lorem ipsum dolor sit amet, consectetur
                adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>
          </div>
          <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
            <div class="intro-video-play">
              <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                  <div class="play-thumb wow zoomIn" data-wow-delay=".2s">
                    <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM"
                      class="glightbox video"><i class="lni lni-play"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Intro Video Area -->
  
  <!-- Start Contact Area -->
  <section id="contact" class="contact-us style3 section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title style3">
            <span class="wow fadeInDown" data-wow-delay=".2s">Bizimlə əlaqə</span>
            <h2 class="wow fadeInUp" data-wow-delay=".4s">Let’s cooperate!</h2>
            <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
              Ipsum available, but the majority have suffered alteration in some form.</p>
          </div>
        </div>
      </div>
      <div class="contact-head">
        <div class="inner-content">
          <div class="row">
            <div class="col-lg-8 col-12">
              <div class="form-main">
                <form class="form" method="post" action="{{ route('contact.store') }}">
                  @csrf
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                      <div class="form-group">
                        <label for="company-name">Ad</label>
                        <input name="name" type="text" placeholder="Adınız" required="required">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <div class="form-group">
                        <label for="company-name">Mövzu</label>
                        <input name="subject" type="text" placeholder="Mövzu" required="required">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <div class="form-group">
                        <label for="company-name">Email</label>
                        <input name="email" type="email" placeholder="Emailiniz" required="required">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <div class="form-group">
                        <label for="company-name">Mobil nömrə</label>
                        <input name="phone" type="text" placeholder="Mobil nömrəniz" required="required">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group message">
                        <label for="company-name">Mesaj</label>
                        <textarea name="message" placeholder="Mesajınız"></textarea>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group button style3">
                        <button type="submit" class="btn ">Müraciəti göndər</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-4 col-12">
              <div class="contact-info">
                <div class="single-head">
                  <div class="single-info">
                    <i class="lni lni-phone"></i>
                    <ul>
                      <li><span>Bizə zəng et</span></li>
                      <li><a href="#">+1 756 445 5658</a></li>
                      <li><a href="#">+1 125 458 5555</a></li>
                    </ul>
                  </div>
                  <div class="single-info">
                    <i class="lni lni-envelope"></i>
                    <ul>
                      <li><span>Bizə mail göndər</span></li>
                      <li><a href="mailto:support@yourmail.com">support@yourmail.com</a></li>
                      <li><a href="mailto:contact@yourmail.com">contact@yourmail.com</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ End Contact Area -->

  
@endsection