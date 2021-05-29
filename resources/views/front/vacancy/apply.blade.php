@extends('front.layout.master')
{{-- @section('title', '') --}}
@section('content')
<section class="profile margin-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3">
                <div class="user-menu">
                    <div class="profile-img">
                        <form class="text-center" enctype="multipart/form-data" method="post">
                            <div class="avatar-wrapper">
                                <label class="logo avatar-placeholder">
                                    <img class="profile-pic" src="/assets/images/company.svg" />
                                </label>
                            </div>
                            <button id="save-avatar" type="submit">Yadda saxla</button>
                        </form>
                    </div>
                    <div class="company-info">
                        <div class="list-head">
                            <i class="fas fa-user"></i>
                            <h6>Qısa təsvir</h6>
                        </div>
                        <div class="line"></div>
                        <p>Vakansiya barədə Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos magnam
                            vero, atque quae magni quis inventore dolor.</p>

                    </div>
                    <div class="company-info">
                        <div class="list-head">
                            <i class="fas fa-user"></i>
                            <h6>Əsas öhdəliklər</h6>
                        </div>
                        <div class="line"></div>
                        <p>Vakansiya barədə Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos magnam
                            vero, atque quae magni quis inventore dolor.</p>
                    </div>
                    <div class="company-info">
                        <div class="list-head">
                            <i class="fas fa-user"></i>
                            <h6>Təminatlar</h6>
                        </div>
                        <div class="line"></div>
                        <p>Vakansiya barədə Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos magnam
                            vero, atque quae magni quis inventore dolor.</p>
                    </div>

                </div>
            </div>
            <div class="col-xl-9 col-lg-9 m-b30">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-company">
                            <div class="about-head">
                                <i class="fas fa-user"></i>
                                <h6>Şirkət haqqında</h6>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae eaque eius officiis
                                nesciunt corrupti libero quod, amet, animi doloribus et asperiores dolorum est
                                delectus
                        </div>
                    </div>
                </div>
                <form id="vacancy-form">
                    <!-- progressbar -->
                    <ul class="progressbar">
                        <li data-fieldset=" personal" class="active">Şəxsi məlumatlar</li>
                        <li data-fieldset="education">Təhsil məlumatları</li>
                        <li data-fieldset="work">İş<br> təcrübəsi</li>
                        <li data-fieldset="language">Dil bilikləri</li>
                        <li data-fieldset="computer">Kompyuter bilikləri</li>
                        <li data-fieldset="certificates">Sertifikatlar</li>
                    </ul>
                    <!-- Personal informations -->
                    <fieldset data-field="personal">
                        <h5>Şəxsi məlumatlar</h5>
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="name">Ad</label>
                                <input name="name" type="text" placeholder="Adınız">
                            </div>
                            <div class="col-lg-4">
                                <label for="surname">Soyad</label>
                                <input name="surname" type="text" placeholder="Soyadınız">
                            </div>
                            <div class="col-lg-4">
                                <label for="middlename">Ata adı</label>
                                <input name="middlename" type="text" placeholder="Ata adı">
                            </div>
                            <div class="col-lg-4">
                                <label for="birthdate">Doğum tarixi</label>
                                <input type="date">
                            </div>
                            <div class="col-lg-4">
                                <label for="citizenship">Vətəndaşlıq</label>
                                <select data-s="citizenship" name="citizenship" id="citizenship">
                                    <option value="choose">Azərbaycanlı</option>
                                    <option value="not-important">Əcnəbi</option>
                                </select>
                            </div>

                            <div class="col-lg-4">
                                <label for="city">Yaşadığınız şəhər</label>
                                <select data-s="city" name="city" id="city">
                                    <option value="choose">Bakı</option>
                                    <option value="not-important">Gəncə</option>
                                    <option value="less-important">Sumqayıt</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="address">Qeydiyyat ünvanı</label>
                                <input name="address" type="text" placeholder="Ünvanınız">
                            </div>
                            <div class="col-lg-4">
                                <label for="gender">Cins</label>
                                <select data-s="gender" name="gender" id="gender">
                                    <option value="choose">Seç</option>
                                    <option value="male">Kişi</option>
                                    <option value="female">Qadın</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="marital">Ailə vəziyyəti</label>
                                <select data-s="marital" name="marital" id="marital">
                                    <option value="choose">Seç</option>
                                    <option value="male">Evli</option>
                                    <option value="female">Subay</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="military">Hərbi mükəlləfiyyət</label>
                                <select data-s="military" name="military" id="military">
                                    <option value="choose">Seç</option>
                                    <option value="not-important">Var</option>
                                    <option value="less-important">Yoxdur</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="driving-lisence">Sürücülük vəsiqəsi</label>
                                <select data-s="driving-lisence" name="driving-lisence" id="driving-lisence">
                                    <option value="choose">Seç</option>
                                    <option value="not-important">Var</option>
                                    <option value="less-important">Yoxdur</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="driving-lisence">Sürücülük vəsiqəsinin kateqoriyası</label>
                                <select name="lisence-category" id="lisence-category">
                                    <option value="choose">Seç</option>
                                    <option value="not-important">A</option>
                                    <option value="less-important">B</option>
                                    <option value="important">C</option>
                                    <option value="more-important">D</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="linkedin">Linkedin profiliniz</label>
                                <input name="linkedin" type="text" placeholder="Linkedin URL">
                            </div>
                            <input data-field="education" type="button" name="next" class="next action-button"
                                value="Sonrakı" />
                        </div>
                    </fieldset>
                    <!-- Education informations -->
                    <fieldset data-field="education">
                        <h5>Təhsil məlumatları</h5>
                        <div class="dynamic-fields-education">
                            <div class="dynamic-education">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="degree">Təhsil dərəcəsi</label>
                                        <select data-s="degree" name="degree" id="degree">
                                            <option>Seç</option>
                                            <option value="">İbtidai</option>
                                            <option value="">Orta</option>
                                            <option value="">Peşə</option>
                                            <option value="bachelor">Bakalavr</option>
                                            <option value="master">Magistr</option>
                                            <option value="phd">Doktorantura</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="score">Qəbul balı</label>
                                        <input type="number" id="score" placeholder="Qəbul balınız">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="university">Təhsil müəssisəsi</label>
                                        <select data-s="university" name="university" id="university">
                                            <option>Seç</option>
                                            <option value="">BMU</option>
                                            <option value="">BDU</option>
                                            <option value="">ADNSU</option>
                                            <option value="bachelor">ADA</option>
                                            <option value="master">BANM</option>
                                            <option value="phd">ADU</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="section">İxtisas istiqaməti</label>
                                        <select data-s="section" name="section" id="section">
                                            <option>Seç</option>
                                            <option value="">İncəsənət</option>
                                            <option value="">İqtisadiyyat</option>
                                            <option value="">Komputer elmləri</option>
                                            <option value="bachelor">Jurnalistika</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="field">İxtisas</label>
                                        <input type="text" placeholder="İxtisasınız">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Daxil olduğunuz il</label>
                                        <input type="number" placeholder="İl">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Bitirdiyiniz il</label>
                                        <input type="number" placeholder="İl">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-education">
                            + Əlavə et
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input data-field="personal" type="button" name="previous"
                                    class="previous action-button" value="Əvvəlki" />
                            </div>
                            <div class="col-lg-6">
                                <input data-field="work" type="button" name="next" class="next action-button"
                                    value="Sonrakı" />
                            </div>
                        </div>
                    </fieldset>
                    <!-- Work informations -->
                    <fieldset data-field="work">
                        <h5>İş təcrübəsi</h5>
                        <div class="dynamic-fields-work">
                            <div class="dynamic-work">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="company-name">Müəssisənin adı</label>
                                        <input data-s="field" type="number" placeholder="Müəssisənin adı">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="function">Funksiya</label>
                                        <select data-s="function" name="function" id="function">
                                            <option>IT</option>
                                            <option value="">Finance</option>
                                            <option value="">Art</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="category">Vəzifə kateqoriyası</label>
                                        <select data-s="category" name="category" id="category">
                                            <option>IT</option>
                                            <option value="">Finance</option>
                                            <option value="">Art</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="field">Sektor</label>
                                        <select data-s="field" name="field" id="field">
                                            <option>IT</option>
                                            <option value="">Finance</option>
                                            <option value="">Art</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>İşə qəbul olduğunuz tarix</label>
                                        <input type="date">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>İşdən çıxdığınız tarix</label>
                                        <input type="date">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="commitment">Vəzifə öhdəlikləri</label>
                                        <select data-s="commitment" name="commitment" id="commitment">
                                            <option>IT</option>
                                            <option value="">Finance</option>
                                            <option value="">Art</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-work">
                            + Əlavə et
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input data-field="education" type="button" name="previous"
                                    class="previous action-button" value="Əvvəlki" />
                            </div>
                            <div class="col-lg-6">
                                <input data-field="language" type="button" name="next" class="next action-button"
                                    value="Sonrakı" />
                            </div>
                        </div>

                    </fieldset>
                    <!-- Language informations -->
                    <fieldset data-field="language">
                        <h5>Dil bilikləri</h5>

                        <div class="dynamic-fields-language">
                            <div class="dynamic-language">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="language">Dil</label>
                                        <select data-s="language" name="language" id="language" class="other-input">
                                            <option value="choose">Seç</option>
                                            <option value="english">Azərbaycan dili</option>
                                            <option value="turkish">Türk dili</option>
                                            <option value="russian">Rus dili</option>
                                            <option value="german">İngilis dili</option>
                                            <option value="other">Digər</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="level">Səviyyə</label>
                                        <select data-level="language" disabled name="level" id="level">
                                            <option>Seç</option>
                                            <option value="beginner">Başlanğıc</option>
                                            <option value="medium">Orta</option>
                                            <option value="advance">Yüksək</option>
                                        </select>
                                    </div>
                                    <div class="other" data-other="language">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="language">Dil</label>
                                                <input type="text" placeholder="Dili daxil edin">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-language">
                            + Əlavə et
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input data-field="work" type="button" name="previous"
                                    class="previous action-button" value="Əvvəlki" />
                            </div>
                            <div class="col-lg-6">
                                <input data-field="computer" type="button" name="next" class="next action-button"
                                    value="Sonrakı" />
                            </div>
                        </div>
                    </fieldset>
                    <!-- Computer informations -->
                    <fieldset data-field="computer">
                        <h5>Kompyuter bilikləri</h5>

                        <div class="dynamic-fields-computer">
                            <div class="dynamic-computer">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="computer">Kompyuter bilikləri</label>
                                        <select data-s="computer" name="computer" id="computer" class="other-input">
                                            <option>Seç</option>
                                            <option value="">MS Office</option>
                                            <option value="other">Digər</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="level">Səviyyə</label>
                                        <select data-s="computer" name="level" id="level">
                                            <option>Seç</option>
                                            <option value="beginner">Başlanğıc</option>
                                            <option value="medium">Orta</option>
                                            <option value="advance">Yüksək</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-computer">
                            + Əlavə et
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input data-field="language" type="button" name="previous"
                                    class="previous action-button" value="Əvvəlki" />
                            </div>
                            <div class="col-lg-6">
                                <input data-field="certificates" type="button" name="next"
                                    class="next action-button" value="Sonrakı" />
                            </div>
                        </div>
                    </fieldset>
                    <!-- Certificates informations -->
                    <fieldset data-field="certificates">
                        <h5>Sertifikat məlumatları</h5>

                        <div class="dynamic-fields-certificate">
                            <div class="dynamic-certificate">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="Certificates">Sertifikat</label>
                                        <select data-s="certificates" name="certificates" id="certificates"
                                            class="other-input">
                                            <option>Seç</option>
                                            <option value="">ACCA</option>
                                            <option value="other">Digər</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="certificates">Sertifikat səviyyəsi</label>
                                        <select data-s="certificates" name="certificate-level"
                                            id="certificate-level">
                                            <option>Seç</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="certificates">Sertifikat file</label>
                                        <div class="certificate-file">
                                            <label class="btn btn-outline-primary">
                                                <i class="fa fa-file"></i> Sertifikat seç<input type="file"
                                                    style="display: none;" name="image">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="certificates">Sertifikat URL</label>
                                        <input type="text" placeholder="URL daxil edin">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-certificate">
                            + Əlavə et
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="certificates">Əmək haqqı gözləntisi</label>
                                <input type="number" placeholder="Məbləği daxil edin">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <input data-field="computer" type="button" name="previous"
                                    class="previous action-button" value="Əvvəlki" />
                            </div>
                            <div class="col-lg-6">
                                <a class="save-cv" href="cv.html">
                                    <input type="button" name="save" class="save-vacancy" value="Müraciət elə" />
                                </a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="shareVacancy" tabindex="-1" aria-labelledby="shareVacancyLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="shareVacancyLabel">Vakansiyanı paylaş
                            </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-10">
                                    <label for="share">Linki kopyala</label>
                                    <input type="text" value="www.scanner.az/vacancy-11">
                                </div>
                                <div class="col-lg-2">
                                    <i class=" fal fa-copy"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('load')
    
@endsection