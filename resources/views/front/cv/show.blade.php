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
                    <a href="{{ route('cv.edit', $cv->id) }}" data-toggle="tooltip" title="Düzəliş et"><i class="fal fa-pencil-alt"></i></a>
                    <a href="{{ route('cv.export', $cv->id) }}" data-toggle="tooltip" title="Yüklə"><i class="fal fa-arrow-circle-down"></i></a>
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
                        <h5>{{ $cv->firstname }} {{ $cv->lastname }} {{ $cv->middlename }}</h5>
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
                            <li>Doğum tarixi: {{ date('d.m.Y', strtotime($cv->birthdate)) }}</li>
                            <li>Vətəndaşlıq: {{ $cv->nationality }}</li>
                            <li>Ailə vəziyyəti: {{ $cv->marital }}</li>
                            <li>Hərbi mükəlləfiyyət: {{ $cv->military }}</li>
                            <li>Sürücülük vəsiqəsi: {{ $cv->driver_license ==  'Var' ? 'Kateqoriya '.$cv->driver_license_category : 'Yoxdur' }}</li>
                        </ul>

                        @if (count($cv->languages))
                        <div class="list-head">
                            <i class="fal fa-language"></i>
                            <h4>Dil bilikləri</h4>
                        </div>
                        <div class="line"></div>
                        <ul>
                            @foreach ($cv->languages as $l)
                            <li class="skills">
                                <div class="field">{{ $l->language }}</div>
                                <div class="level full"></div>
                                <div class="level {{ $l->level == 'Orta' || $l->level == 'Yüksək' ? 'full' : '' }}"></div>
                                <div class="level {{ $l->level == 'Yüksək' ? 'full' : '' }}"></div>
                            </li>
                            @endforeach
                        </ul>
                        @endif

                        @if (count($cv->computer_skills))
                        <div class="list-head">
                            <i class="fal fa-laptop"></i>
                            <h4>Komputer bilikləri</h4>
                        </div>
                        <div class="line"></div>
                        <ul>
                            @foreach ($cv->computer_skills as $s)
                            <li class="skills">
                                <div class="field">{{ $s->computer_skill }}</div>
                                <div class="level full"></div>
                                <div class="level {{ $s->computer_skill_level == 'Orta' || $s->computer_skill_level == 'Yüksək' ? 'full' : '' }}"></div>
                                <div class="level {{ $s->computer_skill_level == 'Yüksək' ? 'full' : '' }}"></div>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="cv-head" data-color>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="contact-info">
                                    <i class="fas fa-phone"></i>
                                    <p>{{ $cv->phone }}</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="contact-info">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>{{ $cv->region }}, Azərbaycan</p>
                                </div>
                            </div>
                            @if ($cv->linkedin)
                            <div class="col-lg-4">
                                <div class="contact-info">
                                    <i class="fab fa-linkedin-in"></i>
                                    <a target="_blank" rel="noreferrer" href="{{ $cv->linkedin }}">{{ $cv->linkedin }}</a>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="cv-body">
                        @if (count($cv->experiences))
                        <div class="list-head">
                            <i class="fas fa-briefcase"></i>

                            <h4>İş təcrübəsi</h4>
                        </div>
                        <div class="line"></div>
                        <ul>
                            @foreach ($cv->experiences as $exp)
                            <li class="about">
                                <div class="job">
                                    <h6>{{ $exp->company }}</h6>
                                    <p>{{ date('d.m.Y', strtotime($exp->employment_date)) }}-{{ $exp->unemployment_date ? date('d.m.Y', strtotime($exp->unemployment_date)) : 'Davam edir' }}</p>
                                </div>
                                <div class="job-description">
                                    <h6>Vəzifə</h6>
                                    <ul>
                                        <li>{{ $exp->obligations }}</li>
                                    </ul>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                        @if (count($cv->educations))
                        <div class="list-head">
                            <i class="fas fa-university"></i>
                            <h4>Təhsil</h4>
                        </div>
                        <div class="line"></div>
                        <ul>
                            @foreach ($cv->educations as $edu)
                            <li class="about">
                                <div class="job">
                                    <h6>{{ $edu->education }}</h6>
                                    <p>{{ $edu->admission_year }}-{{ $edu->graduation_year }}</p>
                                </div>
                                <div class="job-description">
                                    <h6>{{ $edu->university }}</h6>
                                    <p>{{ $edu->profession }}</p>
                                </div>
                                <div class="score">
                                    <h6>Qəbul balı: {{ $edu->exam_score }}</h6>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                        @if (count($cv->certificates))
                        <div class="list-head">
                            <i class="fas fa-file-alt"></i>
                            <h4>Sertifikatlar</h4>
                        </div>
                        <div class="line"></div>
                        <ul>
                            @foreach ($cv->certificates as $cert)
                            <li class="about">
                                <div class="job">
                                    <h6>{{ $cert->certificate }}</h6>
                                </div>
                                <div class="job-description">
                                    <h6>{{ $cert->certificate_level }}</h6>
                                </div>
                                <div class="download-certificate">
                                    <a href=""><i class="fal fa-arrow-circle-down"></i></a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        @endif
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