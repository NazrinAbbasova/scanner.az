@extends('front.layout.master')
@section('title', 'Yeni vakansiya')
@section('content')
<section class="profile margin-page">
    <div class="container">
        <div class="row">
            @include('front.company.sidebar')
            <div class="col-xl-9 col-lg-9 m-b30">
                <form id="vacancy-form" method="post" action="{{ route('vacancies.store') }}">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li data-fieldset="personal" class="active">Şəxsi məlumatlar</li>
                        <li data-fieldset="contact">Əlaqə məlumatları</li>
                        <li data-fieldset="education">Təhsil məlumatları</li>
                        <li data-fieldset="work">İş təcrübəsi</li>
                        <li data-fieldset="language">Dil bilikləri</li>
                        <li data-fieldset="computer">Kompyuter bilikləri</li>
                        <li data-fieldset="certificates">Sertifikatlar</li>
                    </ul>
                    <!-- Personal informations -->
                    <fieldset data-field="personal">
                        <h5>Şəxsi məlumatlar</h5>
                        <div class="intro-video-play">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 col-12">
                                    <div class="play-thumb wow zoomIn" data-wow-delay=".2s">
                                        <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM"
                                            class="glightbox video"><i class="lni lni-play"></i> Video təlimatı
                                            izlə</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label></label>
                                <select data-select="age" class="importance" name="birthdate" id="birthdate">
                                    <option value="choose">Önəmlilik dərəcəsini təyin et</option>
                                    <option value="not-important">Önəm daşımır</option>
                                    <option value="less-important">Az önəm daşıyır</option>
                                    <option value="important">Önəmlidir</option>
                                    <option value="more-important">Mütləqdir</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label > Minimum yaş</label>
                                <input data-s="age" disabled type="text" placeholder="Min.">
                            </div>
                            <div class="col-lg-4">
                                <label >Maksimum yaş</label>
                                <input data-s="age" disabled type="text" placeholder="Maks.">
                            </div>
                            <hr>
                            <div class="col-lg-4">
                                <label></label>
                                <select data-select="citizenship" class="importance" name="citizenship"
                                    id="citizenship">
                                    <option value="choose">Önəmlilik dərəcəsini təyin et</option>
                                    <option value="not-important">Önəm daşımır</option>
                                    <option value="less-important">Az önəm daşıyır</option>
                                    <option value="important">Önəmlidir</option>
                                    <option value="more-important">Mütləqdir</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label >Vətəndaşlıq</label>
                                <select data-s="citizenship" disabled name="gender" id="gender">
                                    <option value="choose">Seç</option>
                                    <option value="male">Azərbaycanlı</option>
                                    <option value="female">Əcnəbi</option>
                                </select>
                            </div>
                            <hr>
                            <div class="col-lg-4">
                                <label></label>
                                <select data-select="gender" class="importance" name="gender" id="gender">
                                    <option value="choose">Önəmlilik dərəcəsini təyin et</option>
                                    <option value="not-important">Önəm daşımır</option>
                                    <option value="less-important">Az önəm daşıyır</option>
                                    <option value="important">Önəmlidir</option>
                                    <option value="more-important">Mütləqdir</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="gender">Cins</label>
                                <select data-s="gender" disabled name="gender" id="gender">
                                    <option value="choose">Seç</option>
                                    <option value="male">Kişi</option>
                                    <option value="female">Qadın</option>
                                </select>
                            </div>

                            <hr>

                            <div class="col-lg-4">
                                <label></label>
                                <select data-select="marital" class="importance" name="marital" id="marital">
                                    <option value="choose">Önəmlilik dərəcəsini təyin et</option>
                                    <option value="not-important">Önəm daşımır</option>
                                    <option value="less-important">Az önəm daşıyır</option>
                                    <option value="important">Önəmlidir</option>
                                    <option value="more-important">Mütləqdir</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="marital">Ailə vəziyyəti</label>
                                <select data-s="marital" disabled name="marital" id="marital">
                                    <option value="choose">Seç</option>
                                    <option value="male">Evli</option>
                                    <option value="female">Subay</option>
                                </select>
                            </div>
                            <hr>
                            <div class="col-lg-4">
                                <label></label>
                                <select data-select="military" class="importance" name="military" id="military">
                                    <option value="choose">Önəmlilik dərəcəsini təyin et</option>
                                    <option value="not-important">Önəm daşımır</option>
                                    <option value="less-important">Az önəm daşıyır</option>
                                    <option value="important">Önəmlidir</option>
                                    <option value="more-important">Mütləqdir</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="military">Hərbi mükəlləfiyyət</label>
                                <select data-s="military" disabled name="military" id="military">
                                    <option value="choose">Seç</option>
                                    <option value="not-important">Var</option>
                                    <option value="less-important">Yoxdur</option>
                                </select>
                            </div>
                            <hr>
                            <div class="col-lg-4">
                                <label></label>
                                <select data-select="driving-lisence" class="importance" name="driving-lisence"
                                    id="driving-lisence">
                                    <option value="choose">Önəmlilik dərəcəsini təyin et</option>
                                    <option value="not-important">Önəm daşımır</option>
                                    <option value="less-important">Az önəm daşıyır</option>
                                    <option value="important">Önəmlidir</option>
                                    <option value="more-important">Mütləqdir</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="driving-lisence">Sürücülük vəsiqəsi</label>
                                <select data-s="driving-lisence" disabled name="driving-lisence"
                                    id="driving-lisence">
                                    <option value="choose">Seç</option>
                                    <option value="Var">Var</option>
                                    <option value="Yoxdur">Yoxdur</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <labelfor="driving-lisence">Sürücülük vəsiqəsinin kateqoriyası</labelfor=>
                                    <select data-s="driving-lisence" disabled name="lisence-category" id="lisence-category">
                                        <option value="choose">Seç</option>
                                        <option value="A1">A1</option>
                                        <option value="A">A</option>
                                        <option value="B1">B1</option>
                                        <option value="B">B</option>
                                        <option value="C1">C1</option>
                                        <option value="C">C</option>
                                        <option value="D1">D1</option>
                                        <option value="D">D</option>
                                        <option value="BE">BE</option>
                                        <option value="C1E">C1E</option>
                                        <option value="CE">CE</option>
                                        <option value="D1E">D1E</option>
                                        <option value="DE">DE</option>
                                    </select>
                            </div>
                        </div>
                        <input data-field="personal" type="button" name="next" class="next action-button"
                            value="Next" />
                    </fieldset>
                    <!-- Contact informations -->
                    <fieldset data-field="contact">
                        <h5>Əlaqə məlumatları</h5>
                        <div class="intro-video-play">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 col-12">
                                    <div class="play-thumb wow zoomIn" data-wow-delay=".2s">
                                        <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM"
                                            class="glightbox video"><i class="lni lni-play"></i> Video təlimatı
                                            izlə</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label></label>
                                <select data-select="address" class="importance" name="address" id="address">
                                    <option>Önəmlilik dərəcəsini təyin et</option>
                                    <option value="not-important">Önəm daşımır</option>
                                    <option value="less-important">Az önəm daşıyır</option>
                                    <option value="important">Önəmlidir</option>
                                    <option value="more-important">Mütləqdir</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label >Yaşadığı şəhər</label>
                                <select data-s="address" class="importance" name="address" id="address">
                                    <option>Seç</option>
                                    @foreach ($regions as $region)
                                    <option value="{{ $region->name }}">{{ $region->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="change-step">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input data-field="contact" type="button" name="previous"
                                            class="previous action-button" value="Əvvəlki" />
                                    </div>
                                    <div class="col-lg-6">
                                        <input data-field="contact" type="button" name="next"
                                            class="next action-button" value="Növbəti" />
                                    </div>
                                </div>
                            </div>
                    </fieldset>
                    <!-- Education informations -->
                    <fieldset data-field="education">
                        <h5>Təhsil məlumatları</h5>
                        <div class="intro-video-play">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 col-12">
                                    <div class="play-thumb wow zoomIn" data-wow-delay=".2s">
                                        <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM"
                                            class="glightbox video"><i class="lni lni-play"></i> Video təlimatı
                                            izlə</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label></label>
                                <select data-select="degree" class="importance" name="degree" id="degree">
                                    <option>Önəmlilik dərəcəsini təyin et</option>
                                    <option value="not-important">Önəm daşımır</option>
                                    <option value="less-important">Az önəm daşıyır</option>
                                    <option value="important">Önəmlidir</option>
                                    <option value="more-important">Mütləqdir</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="degree">Təhsil dərəcəsi</label>
                                <select data-s="degree" disabled name="degree" id="degree">
                                    <option>Seç</option>
                                    <option value="Orta">Orta</option>
                                    <option value="Peşə">Peşə</option>
                                    <optgroup label="Ali">
                                        <option value="Bakalavr">Bakalavr</option>
                                        <option value="Magistr">Magistr</option>
                                        <option value="Doktorantura">Doktorantura</option>
                                    </optgroup>
                                </select>
                            </div>
                            <hr>
                            <div class="col-lg-4">
                                <label></label>
                                <select data-select="score" class="importance" name="score" id="score">
                                    <option>Önəmlilik dərəcəsini təyin et</option>
                                    <option value="not-important">Önəm daşımır</option>
                                    <option value="less-important">Az önəm daşıyır</option>
                                    <option value="important">Önəmlidir</option>
                                    <option value="more-important">Mütləqdir</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="score">Qəbul balı</label>
                                <input data-s="score" disabled type="text" placeholder="Bal">
                            </div>
                            <div class="col-lg-6">
                                <input data-field="education" type="button" name="previous"
                                    class="previous action-button" value="Previous" />
                            </div>
                            <div class="col-lg-6">
                                <input data-field="education" type="button" name="next" class="next action-button"
                                    value="Next" />
                            </div>

                    </fieldset>
                    <!-- Work informations -->
                    <fieldset data-field="work">
                        <h5>İş təcrübəsi</h5>
                        <div class="intro-video-play">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 col-12">
                                    <div class="play-thumb wow zoomIn" data-wow-delay=".2s">
                                        <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM"
                                            class="glightbox video"><i class="lni lni-play"></i> Video təlimatı
                                            izlə</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label></label>
                                <select data-select="field" class="importance" name="field" id="field">
                                    <option>Önəmlilik dərəcəsini təyin et</option>
                                    <option value="not-important">Önəm daşımır</option>
                                    <option value="less-important">Az önəm daşıyır</option>
                                    <option value="important">Önəmlidir</option>
                                    <option value="more-important">Mütləqdir</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="field">Sektor</label>
                                <select data-s="field" disabled name="field" id="field">
                                    <option>Seç</option>
                                    @foreach ($fields as $field)
                                        <option value="{{ $field->name }}">{{ $field->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="field">Sektor üzrə iş stajı</label>
                                <input disabled data-s="field" name="field_experience" type="number">
                            </div>
                            <hr>
                            <div class="col-lg-4">
                                <label></label>
                                <select data-select="function" class="importance" name="function" id="function">
                                    <option>Önəmlilik dərəcəsini təyin et</option>
                                    <option value="not-important">Önəm daşımır</option>
                                    <option value="less-important">Az önəm daşıyır</option>
                                    <option value="important">Önəmlidir</option>
                                    <option value="more-important">Mütləqdir</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="function">Funksiya</label>
                                <select data-s="function" disabled name="function" id="function">
                                    <option>Seç</option>
                                    @foreach ($funcs as $func)
                                    <option value="{{ $func->name }}">{{ $func->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <hr>
                            <div class="col-lg-4">
                                <label></label>
                                <select data-select="category" class="importance" name="position_importance" id="category">
                                    <option>Önəmlilik dərəcəsini təyin et</option>
                                    <option value="not-important">Önəm daşımır</option>
                                    <option value="less-important">Az önəm daşıyır</option>
                                    <option value="important">Önəmlidir</option>
                                    <option value="more-important">Mütləqdir</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="category">Vəzifə kateqoriyası</label>
                                <select data-s="category" disabled name="position" id="category">
                                    <option>Seç</option>
                                    @foreach ($positions as $position)
                                        <option value="{{ $position->name }}">{{ $position->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <hr>
                            <div class="col-lg-4">
                                <label></label>
                                <select data-select="worktime" class="importance" name="employment_duration_importance" id="worktime">
                                    <option>Önəmlilik dərəcəsini təyin et</option>
                                    <option value="not-important">Önəm daşımır</option>
                                    <option value="less-important">Az önəm daşıyır</option>
                                    <option value="important">Önəmlidir</option>
                                    <option value="more-important">Mütləqdir</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>İş stajı</label>
                                <input data-s="worktime" name="employment_duration" disabled type="number">
                            </div>
                            <div class="col-lg-6">
                                <input data-field="work" type="button" name="previous"
                                    class="previous action-button" value="Previous" />
                            </div>
                            <div class="col-lg-6">
                                <input data-field="work" type="button" name="next" class="next action-button"
                                    value="Next" />
                            </div>
                    </fieldset>
                    <!-- Language informations -->
                    <fieldset data-field="language">
                        <h5>Dil bilikləri</h5>
                        <div class="intro-video-play">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 col-12">
                                    <div class="play-thumb wow zoomIn" data-wow-delay=".2s">
                                        <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM"
                                            class="glightbox video"><i class="lni lni-play"></i> Video təlimatı
                                            izlə</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label></label>
                                <select data-select="language" class="importance" name="language" id="language">
                                    <option>Önəmlilik dərəcəsini təyin et</option>
                                    <option value="not-important">Önəm daşımır</option>
                                    <option value="less-important">Az önəm daşıyır</option>
                                    <option value="important">Önəmlidir</option>
                                    <option value="more-important">Mütləqdir</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="language">Dil</label>
                                <select data-s="language" disabled name="language" id="language">
                                    <option>Seç</option>
                                    @foreach ($languages as $language)
                                    <option value="{{ $language->id }}">{{ $language->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label></label>
                                <select data-s="language" class="importance" name="level" id="level">
                                    <option>Seç</option>
                                    <option value="Başlanğıc">Başlanğıc</option>
                                    <option value="Orta">Orta</option>
                                    <option value="Yüksək">Yüksək</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <input data-field="language" type="button" name="previous"
                                    class="previous action-button" value="Previous" />
                            </div>
                            <div class="col-lg-6">
                                <input data-field="language" type="button" name="next" class="next action-button"
                                    value="Next" />
                            </div>
                    </fieldset>
                    <!-- Computer informations -->
                    <fieldset data-field="computer">
                        <h5>Təhsil məlumatları</h5>
                        <div class="intro-video-play">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 col-12">
                                    <div class="play-thumb wow zoomIn" data-wow-delay=".2s">
                                        <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM"
                                            class="glightbox video"><i class="lni lni-play"></i> Video təlimatı
                                            izlə</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label></label>
                                <select data-select="computer" class="importance" name="computer" id="computer">
                                    <option>Önəmlilik dərəcəsini təyin et</option>
                                    <option value="not-important">Önəm daşımır</option>
                                    <option value="less-important">Az önəm daşıyır</option>
                                    <option value="important">Önəmlidir</option>
                                    <option value="more-important">Mütləqdir</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="computer">Kompyuter bilikləri</label>
                                <select data-s="computer" disabled name="computer" id="computer">
                                    <option>Seç</option>
                                    @foreach ($skills as $skill)
                                    <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label></label>
                                <select data-s="computer" class="importance" name="level" id="level">
                                    <option>Seç</option>
                                    <option value="Başlanğıc">Başlanğıc</option>
                                    <option value="Orta">Orta</option>
                                    <option value="Yüksək">Yüksək</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <input data-field="computer" type="button" name="previous"
                                    class="previous action-button" value="Previous" />
                            </div>
                            <div class="col-lg-6">
                                <input data-field="computer" type="button" name="next" class="next action-button"
                                    value="Next" />
                            </div>
                    </fieldset>
                    <!-- Certificates informations -->
                    <fieldset data-field="certificates">
                        <h5>Sertifikat məlumatları</h5>
                        <div class="intro-video-play">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 col-12">
                                    <div class="play-thumb wow zoomIn" data-wow-delay=".2s">
                                        <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM"
                                            class="glightbox video"><i class="lni lni-play"></i> Video təlimatı
                                            izlə</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label></label>
                                <select data-select="certificates" class="importance" name="certificates"
                                    id="Certificates">
                                    <option>Önəmlilik dərəcəsini təyin et</option>
                                    <option value="not-important">Önəm daşımır</option>
                                    <option value="less-important">Az önəm daşıyır</option>
                                    <option value="important">Önəmlidir</option>
                                    <option value="more-important">Mütləqdir</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="Certificates">Sertifikat</label>
                                <select data-s="certificates" disabled name="certificates" id="certificates">
                                    <option>Seç</option>
                                    @foreach ($certificates as $certificate)
                                    <option value="{{ $certificate->id }}">{{ $certificate->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="Certificates">Sertifikat səviyyəsi</label>
                                <select data-s="certificates" disabled name="certificate-level" id="certificate-level">
                                    <option>Seç</option>
                                </select>
                            </div>
                            <input data-field="certificates" type="button" name="previous"
                                class="previous action-button" value="Previous" />
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section('load')
<!-- jQuery -->
<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js"type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js"type="text/javascript"></script>

<script>
    let progressbar = $("#progressbar li");
    if (progressbar) {
        progressbar.on("click", function () {
            $(this).addClass("active");
            $(this).siblings().removeClass("active");
            let fieldset = $(this).data("fieldset");
            $('fieldset:not([data-field=" + fieldset + "])').fadeOut(200);
            $("fieldset[data-field=" + fieldset + "]").fadeIn(200);
        });
    }

    // $(".next.action-button").on("click", function () {
    //   $(this).addClass("active").addClass("active");
    //   $(this).addClass("active").siblings().removeClass("active");
    //   let fieldset = $("#progressbar li").data("fieldset");
    //   $('fieldset:not([data-field=" + fieldset + "])').fadeOut(200);
    //   $("fieldset[data-field=" + fieldset + "]").fadeIn(200);
    // });

    // $(".previous.action-button").on("click", function () {
    //   $("#progressbar li").addClass("active");
    //   $("#progressbar li").siblings().removeClass("active");
    //   let fieldset = $("#progressbar li").data("fieldset");
    //   $('fieldset:not([data-field=" + fieldset + "])').fadeOut(200);
    //   $("fieldset[data-field=" + fieldset + "]").fadeIn(200);
    // });

    // $(".submit").click(function () {
    //   return false;
    // });

    $(".importance").on("change", function () {
        var select = $(this).data("select");

        $(this).val() == "choose"
            ? $(`[data-s=${select}]`).prop("disabled", true)
            : $(`[data-s=${select}]`).prop("disabled", false);
        $(this).val() == "not-important"
            ? $(`[data-s=${select}]`).prop("disabled", true)
            : $(`[data-s=${select}]`).prop("disabled", false);
    });


    $('#certificates').on('change', function(){ 
        const id = $(this).val()

        console.log(id);
    })
</script>

<link rel="stylesheet" href="{{ asset('static/front/css/profile.css') }}">
<link rel="stylesheet" href="{{ asset('static/front/css/icons.min.css') }}" />
<link rel="stylesheet" href="{{ asset('static/front/css/create-vacancy.css') }}">

@endsection