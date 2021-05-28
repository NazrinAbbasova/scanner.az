@extends('front.layout.master')
@section('title', 'Haqqımızda')
@section('content')
<!-- Start About Area -->

<section id="explore" class="app-description startup-page-style section white-bg mt-100 about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="content wow fadeInLeft" data-wow-delay=".4s">
                    <h2>Perfect for Operation HR <br>and Finance</h2>
                    <p><strong>Missiyamız (bizim vəzifəmiz, var olma səbəbimiz nədir?)</strong></p>
                    <p>Ən ədalətli və ən sürətli işə qəbul sistemi yaratmaq.</p>

                    <p><strong>Vizyonumuz (Gələcəyi necə görürük)</strong></p>
                    <p>İşə qəbul sistemini 1 klikdə toplamaq (ən doğru sözü və ya ekvivalenti müzakirəyə açıq)</p>
                    <p><strong>Niyə?</strong> - İşə qəbul sistemində olan problemləri aradan qaldırmaqla ən ədalətli
                        və ən
                        sürətli işə qəbul sistemi yaratmağa kömək oluruq.</p>
                    <p><strong>Necə edirik?</strong>
                    <ul>
                        <li>Rəqəmsal həllər vasitəsilə</li>
                        <li>Hər kəsə bərabər imkanlar yaratmaqla</li>
                        <li>İşə qəbul xətalarını, zamanını və xərclərini azaltmaqla</li>
                    </ul>
                    </p>
                    <p><strong>Nə edirik (məhsulumuz nədir?)?</strong> - Avtomatlaşmış online namizəd izləmə
                        platforması
                        vasitəsilə ən doğru namizədi təyin edirik.</p>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="right wow fadeInRight" data-wow-delay=".6s">
                    <img src="{{ asset("static/front/images/img2.png") }}" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>

<!--/ End About Area -->

<!-- Start Why Choose Area -->
<section id="features" class="why-choose why-choose-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <!-- Single Choose -->
                <div class="single-choose wow fadeInUp" data-wow-delay=".2s">
                    <div class="icon">
                        <!-- <i class="lni lni-cog"></i> -->
                        1
                    </div>
                    <h3>Ədalətli</h3>
                    <p>İnsanlara bərabər imkanlar tanımağa və haqqı olanı verməyə çalışırıq, Biz ədalətin qarşılıqlı
                        anlayış və güvən yaratdığına inanırıq.
                    </p>
                </div>
                <!-- End Single Choose -->
            </div>
            <div class="col-lg-3">
                <!-- Single Choose -->
                <div class="single-choose wow fadeInUp" data-wow-delay=".2s">
                    <div class="icon">
                        <!-- <i class="lni lni-cog"></i> -->
                        2
                    </div>
                    <h3>Güvənilir</h3>
                    <p>Bizim uğur kriteriyamız yaratdığımız güvənin ölçüsüdür.</p>
                </div>
                <!-- End Single Choose -->
            </div>
            <div class="col-lg-3">
                <!-- Single Choose -->
                <div class="single-choose wow fadeInUp" data-wow-delay=".4s">
                    <div class="icon two">
                        <!-- <i class="lni lni-phone-set"></i> -->
                        3
                    </div>
                    <h3>Yenilikçi</h3>
                    <p>Cəmiyyət üçün yeni dəyərlər yaratdıqca inkişaf etdiyimizin
                        fərqindəyik, bu səbəbdən daim yaradıcı və yenilikçi olmağa çalışırıq.</p>
                </div>
                <!-- End Single Choose -->
            </div>
            <div class="col-lg-3">
                <!-- Single Choose -->
                <div class="single-choose wow fadeInUp" data-wow-delay=".6s">
                    <div class="icon three">
                        <!-- <i class="lni lni-codepen"></i> -->
                        4
                    </div>
                    <h3>Sürətli</h3>
                    <p>Yaratdığımız dəyərlərdə prosesləri avtomatlaşdıraraq sürətli və
                        səmərəli həllər yaratmağa çalışırıq.</p>
                </div>
                <!-- End Single Choose -->
            </div>
        </div>
    </div>
</section>
<!-- End Why Choose Area -->
@endsection