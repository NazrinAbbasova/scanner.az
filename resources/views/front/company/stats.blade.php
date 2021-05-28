@extends('front.layout.master')
@section('title', auth()->user()->company)

@section('content')
<section class="profile margin-page">
    <div class="container">
        <div class="row">
            @include('front.company.sidebar')
            <div class="col-xl-9 col-lg-9">
                <h5>Ümumi statistika</h5>
                <div class="our-achievement">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-achievement wow fadeInUp" data-wow-delay=".2s">
                            <i class="fal fa-file"></i>
                            <h3 class="counter"><span id="secondo1" class="countup" cup-end="{{ $company->vacancies->count() }}">{{ $company->vacancies->count() }}</span></h3>
                            <p>Ümumi vakansiya sayı</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-achievement wow fadeInUp" data-wow-delay=".4s">
                            <i class="lni lni-users"></i>
                            <h3 class="counter"><span id="secondo2" class="countup" cup-end="100">100</span>K+</h3>
                            <p>Müraciət edən namizədlər</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-achievement wow fadeInUp" data-wow-delay=".6s">
                            <i class="fal fa-file-check"></i>
                            <h3 class="counter"><span id="secondo3" class="countup" cup-end="855">855</span>K+</h3>
                            <p>Uğurlu namizədlər</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-achievement wow fadeInUp" data-wow-delay=".6s">
                            <i class="fal fa-clock"></i>
                            <h3 class="counter"><span id="secondo3" class="countup" cup-end="295">295</span>K+</h3>
                            <p>Qənaət olunmuş zaman</p>
                        </div>
                    </div>
                </div>
                <div class="calculator-head">
                    <h5>Qənaət kalkulyatoru</h5>
                    <p>Scannerdən istifadə etməklə ay ərzində qənaət etdiyiniz ümumi işə qəbul xərclərini rahatlıqla
                        hesablaya bilərsiniz. </p>
                    <p>
                        Hesablama zamanı aşağıdakı məlumatlardan istifadə olunur: <br>
                        1. Ay ərzində daxil olmuş CV sayı<br>
                        2. Bir namizədə sərf olunmuş ortalama zaman<br>
                        3. Aylıq orta iş günlərinin sayı<br>
                        4. İşə qəbul mütəxəssisinin orta aylıq əmək haqqı (Əmək haqqı işə qəbul mütəxəssisi
                        tərəfindən könüllü surətdə daxil edilir və tam məxfi olur, sayt adminləri daxil heç kim
                        tərəfindən bu məlumat görünmür)
                    </p>
                </div>

                <div class="calculator">
                    <div class="col-lg-6 col-md-6 col-12">
                        <form action="">
                            <div class="form-group">
                                <label for="name">Əmək haqqı</label>
                                <input class="salary" name="salary" type="number"
                                    placeholder="Əmək haqqıınızı daxil edin" required="required">
                            </div>
                            <input type="button" class="calculate" value="Hesabla">
                        </form>
                    </div>
                    <div class="col-lg-3">
                        <div class="single-achievement wow fadeInUp" data-wow->
                            <i class="fal fa-money-bill-alt"></i>
                            <h3 class="counter"><span id="secondo3" class="budget countup"></span></h3>
                            <p class="budget-text">Qənaət olunmuş büdcə</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('load')
    @include('front.company.load')
    <link rel="stylesheet" href="{{ asset('static/front/css/statistics.css') }}">
@endsection