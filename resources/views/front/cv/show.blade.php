@extends('front.layout.master')
@section('title', auth()->user()->firstname.' '.auth()->user()->lastname)
@section('content')
<section class="profile margin-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="cv-colors">
                    <div class="back">
                        <a href="{{ route('applicant.edit') }}">
                            <i class="fal fa-arrow-square-left"></i>
                        </a>
                    </div>
                    <div class="colors blue"></div>
                    <div class="colors purple"></div>
                    <div class="colors green"></div>
                    <div class="colors primary"></div>
                    <div class="colors red"></div>
                    <div class="colors yellow"></div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="cv-actions">
                    <a href="" data-toggle="tooltip" title="Düzəliş et"><i class="fal fa-pencil-alt"></i></a>
                    <a href="" data-toggle="tooltip" title="Yüklə"><i class="fal fa-arrow-circle-down"></i></a>
                    <div class="share">
                        <a href="#" data-toggle="tooltip" title="Paylaş"><i class="fal fa-share"></i></a>
                    </div>
                    <div class="share-socials">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-telegram-plane"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="cv">
            <div class="row">
                <div class="col-lg-4 mb-30">
                    <div class="cv-head" data-color>
                        <h5>Nazrin Abbasova Oktay</h5>
                    </div>
                    <div class="personal-info">
                        <div class="profile-img">
                            <form class="text-center" action="{{ route('applicant.photo') }}" enctype="multipart/form-data" method="post">
                                <div class="avatar-wrapper">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                                    <label class="{{ auth()->user()->photo ? '' : 'avatar-placeholder' }}">
                                        <img class="profile-pic" src="{{ auth()->user()->photo ? asset(auth()->user()->photo) : asset('static/front/images/applicant.svg') }}" />
                                        <input name="photo" id="upload-avatar" class="file-upload d-none" type="file" accept="image/*" />
                                    </label>
                                </div>
                                <button id="save-avatar"  type="submit">Yadda saxla</button>
                            </form>
                        </div>
                        <div class="list-head">
                            <i class="fas fa-user"></i>
                            <h4>Şəxsi məlumatlar</h4>
                        </div>
                        <div class="line"></div>
                        <ul>
                            <li>Doğum tarixi: 18.03.1998</li>
                            <li>Vətəndaşlıq: Azərbaycanlı</li>
                            <li>Ailə vəziyyəti: Subay</li>
                            <li>Hərbi mükəlləfiyyət: Yoxdur</li>
                            <li>Sürücülük vəsiqəsi: Kateqoriya (B)</li>
                        </ul>

                        <div class="list-head">
                            <i class="fal fa-language"></i>
                            <h4>Dil bilikləri</h4>
                        </div>
                        <div class="line"></div>
                        <ul>
                            <li class="skills">
                                <div class="field">Azərbaycan dili</div>
                                <div class="level full"></div>
                                <div class="level full"></div>
                                <div class="level full"></div>

                            </li>
                            <li class="skills">
                                <div class="field">İngilis dili</div>
                                <div class="level full"></div>
                                <div class="level full"></div>
                                <div class="level"></div>
                            </li>
                            <li class="skills">
                                <div class="field">Rus dili</div>
                                <div class="level full"></div>
                                <div class="level"></div>
                                <div class="level"></div>
                            </li>
                        </ul>

                        <div class="list-head">
                            <i class="fal fa-laptop"></i>
                            <h4>Komputer bilikləri</h4>
                        </div>
                        <div class="line"></div>
                        <ul>
                            <li class="skills">
                                <div class="field">Azərbaycan dili</div>
                                <div class="level full"></div>
                                <div class="level full"></div>
                                <div class="level full"></div>

                            </li>
                            <li class="skills">
                                <div class="field">İngilis dili</div>
                                <div class="level full"></div>
                                <div class="level full"></div>
                                <div class="level"></div>
                            </li>
                            <li class="skills">
                                <div class="field">Rus dili</div>
                                <div class="level full"></div>
                                <div class="level"></div>
                                <div class="level"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="cv-head" data-color>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="contact-info">
                                    <i class="fas fa-phone"></i>
                                    <p>+994 51 595 66 55</p>
                                    <p>012 555 55 55</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="contact-info">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>Bakı, Azərbaycan</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="contact-info">
                                    <i class="fab fa-linkedin-in"></i>
                                    <a
                                        href="https://www.linkedin.com/in/nazrin-abbasova/">https://www.linkedin.com/in/nazrin-abbasova/</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cv-body">
                        <div class="list-head">
                            <i class="fas fa-briefcase"></i>

                            <h4>İş təcrübəsi</h4>
                        </div>
                        <div class="line"></div>
                        <ul>
                            <li class="about">
                                <div class="job">
                                    <h6>Kapital Bank</h6>
                                    <p>2018-2020</p>
                                </div>
                                <div class="job-description">
                                    <h6>Vəzifə</h6>
                                    <ul>
                                        <li>Vəzifə öhdəliyi</li>
                                        <li>Vəzifə öhdəliyi</li>
                                        <li>Vəzifə öhdəliyi</li>
                                        <li>Vəzifə öhdəliyi</li>
                                        <li>Vəzifə öhdəliyi</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="about">
                                <div class="job">
                                    <h6>Kapital Bank</h6>
                                    <p>2018-2020</p>
                                </div>
                                <div class="job-description">
                                    <h6>Vəzifə</h6>
                                    <ul>
                                        <li>Vəzifə öhdəliyi</li>
                                        <li>Vəzifə öhdəliyi</li>
                                        <li>Vəzifə öhdəliyi</li>
                                        <li>Vəzifə öhdəliyi</li>
                                        <li>Vəzifə öhdəliyi</li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <div class="list-head">
                            <i class="fas fa-university"></i>
                            <h4>Təhsil</h4>
                        </div>
                        <div class="line"></div>
                        <ul>
                            <li class="about">
                                <div class="job">
                                    <h6>Bakalavr</h6>
                                    <p>2018-2020</p>
                                </div>
                                <div class="job-description">
                                    <h6>Ali təhsil müəssisəsi</h6>
                                    <p>İxtisas</p>
                                </div>
                                <div class="score">
                                    <h6>Qəbul balı: 666</h6>
                                </div>
                            </li>
                            <li class="about">
                                <div class="job">
                                    <h6>Magistr</h6>
                                    <p>2018-2020</p>
                                </div>
                                <div class="job-description">
                                    <h6>Ali təhsil müəssisəsi</h6>
                                    <p>İxtisas</p>
                                </div>
                                <div class="score">
                                    <h6>Qəbul balı: 100</h6>
                                </div>
                            </li>
                        </ul>
                        <div class="list-head">
                            <i class="fas fa-file-alt"></i>
                            <h4>Sertifikatlar</h4>
                        </div>
                        <div class="line"></div>
                        <ul>
                            <li class="about">
                                <div class="job">
                                    <h6>IELTS</h6>
                                </div>
                                <div class="job-description">
                                    <h6>8.0</h6>
                                </div>
                                <div class="download-certificate">
                                    <a href=""><i class="fal fa-arrow-circle-down"></i></a>

                                </div>
                            </li>
                            <li class="about">
                                <div class="job">
                                    <h6>IELTS</h6>
                                </div>
                                <div class="job-description">
                                    <h6>8.0</h6>
                                </div>
                                <div class="download-certificate">
                                    <a href=""><i class="fal fa-arrow-circle-down"></i></a>
                                </div>
                            </li>
                        </ul>
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
<link rel="stylesheet" href="{{ asset('static/front/css/cv.css') }}">
@endsection