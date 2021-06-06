<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>{{ $cv->firstname.' '.$cv->lastname }}</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Place favicon.ico in the root directory -->

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('static/front/css/icons.min.css') }}" /> 
</head>
<style>
    body {
        font-family: 'Poppins', sans-serif
    }
    .fas {
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1
    }

    .fa-map-marker-alt:before {
        content: "\f3c5"
    }


    .fa-user:before {
        content: "\f007"
    }

    h5 {
        font-size: 18px;
        font-weight: 500;
        padding: 15px 30px;
        background: linear-gradient(45deg, #4567f4, #3CD3AD);
        color: #fff;
        border: none;
        border-radius: 6px;
        text-align: center;
    }

    .profile-img {
        display: flex;
        justify-content: center;
    }

    .avatar-wrapper {
        position: relative;
        height: 180px;
        width: 180px;
        border-radius: 50%;
        overflow: hidden;
        box-shadow: 1px 1px 15px -5px rgba(0, 0, 0, 0.3);
        transition: all 0.3s ease;
    }

    .avatar-wrapper:hover {
        transform: scale(1.02);
    }

    .avatar-wrapper>label {
        cursor: pointer;
        width: 100%;
        height: 100%;
    }

    #save-avatar {
        display: none;
    }

    .avatar-wrapper>.avatar-placeholder {
        padding: 3rem;
    }

    .avatar-wrapper .profile-pic {
        width: 100%;
        transition: all 0.3s ease;
    }

    .cv-head {
        background: linear-gradient(45deg, #4567f4, #3CD3AD);
        padding: 2rem;
        color: #fff;
        text-align: center;
        height: 10rem;
    }

    .cv-head h5 {
        font-size: 26px;
        margin: 0;
        border-radius: 0;
        background: none;
    }

    .cv-head i {
        text-align: center;
        background: white;
        width: 3rem;
        height: 3rem;
        border-radius: 50%;
        line-height: 3rem;
        font-size: 20px;
        color: #4567f4;
    }

    .line {
        background: linear-gradient(45deg, #4567f4, #3CD3AD);
        width: 80%;
        height: 1px;
        margin-left: 3.5rem;
    }

    .contact-info {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .contact-info p {
        margin: 0;
    }

    .contact-info i {
        margin-bottom: 10px;
    }

    .contact-info a {
        word-break: break-all;
        color: white;
    }

    .personal-info {
        background-color: #F3F3F3;
        color: #000;
        padding: 2rem;
        height: 90%;
    }

    .list-head {
        display: flex;
        text-align: center;
        margin-top: 3rem;
    }

    .list-head i {
        background: linear-gradient(45deg, #4567f4, #3CD3AD);
        width: 3rem;
        height: 3rem;
        border-radius: 50%;
        line-height: 3rem;
        font-size: 20px;
        color: white;
    }

    .list-head h4 {
        line-height: 2rem;
        margin: 8px;
    }

    .personal-info li {
        margin: 1rem;
        word-break: break-word;
        font-weight: 500;
        /* text-align: center; */
    }

    .skills,
    .about {
        display: flex;
        line-height: 1rem;
    }

    .skills .field {
        width: 8rem;
    }

    .skills .level {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        border: 1px solid #4567f4;
        margin-left: 1rem;
    }

    .skills .level.full {
        background: linear-gradient(45deg, #4567f4, #3CD3AD);
        border: none;
    }

    .career-info {
        background-color: #F3F3F3;
    }

    .cv-body .about {
        margin-top: 1rem;
        margin-left: 3.5rem;
        margin-bottom: 2rem;
    }

    .cv-body .about .job {
        margin-right: 5rem;
    }

    .cv-body>ul {
        position: relative;
    }

    .cv-body>ul::after {
        width: 2px;
        height: 100%;
        background: #4567f4;
        position: absolute;
        top: -17px;
        left: 23px;
        content: ""
    }

    .job {
        position: relative;
    }

    .job h6::before {
        content: "";
        width: 1rem;
        height: 1rem;
        background: #4567f4;
        border-radius: 50%;
        font-weight: bold;
        position: absolute;
        left: -2.5rem;
    }

    .job h6 {
        width: 7rem;
    }

    .about h6 {
        margin-bottom: 10px;
    }

    .job-description {
        width: 10.5rem;
    }

    .cv-body .about .job p,
    .cv-body .about .job-description li {
        margin-top: 10px;
        list-style-type: disc;
    }

    .container {
        width: 100%;
        padding-right: var(--bs-gutter-x, .75rem);
        padding-left: var(--bs-gutter-x, .75rem);
        margin-right: auto;
        margin-left: auto
    }

    .row {
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 0;
        display: flex;
        flex-wrap: wrap;
        margin-top: calc(var(--bs-gutter-y) * -1);
        margin-right: calc(var(--bs-gutter-x)/ -2);
        margin-left: calc(var(--bs-gutter-x)/ -2)
    }

    .row>* {
        flex-shrink: 0;
        width: 100%;
        max-width: 100%;
        padding-right: calc(var(--bs-gutter-x)/ 2);
        padding-left: calc(var(--bs-gutter-x)/ 2);
        margin-top: var(--bs-gutter-y)
    }

    .col-lg-4 {
        flex: 0 0 auto;
        width: 33.3333333333%
    }

    .col-lg-8 {
        flex: 0 0 auto;
        width: 66.6666666667%
    }
</style>

<body>
    <section class="profile margin-page">
        <div class="container">
            <div id="cv">
                <div class="row">
                    <div class="col-lg-4 mb-30">
                        <div class="cv-head" data-color>
                            <h5>{{ $cv->firstname.' '.$cv->lastname.' '.$cv->middlename }}</h5>
                        </div>
                        <div class="personal-info">
                            <div class="profile-img">
                                <div class="avatar-wrapper">
                                    <label class="{{ $cv->user->photo ? '' : 'avatar-placeholder' }}">
                                        <img class="profile-pic" src="{{ $cv->user->photo ? asset($cv->user->photo) : asset('static/front/images/applicant.svg') }}" />
                                    </label>
                                </div>
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
                                <div class="col-lg-4">
                                    <div class="contact-info">
                                        <i class="fab fa-linkedin-in"></i>
                                        <a
                                            href="{{ $cv->linkedin }}">{{ $cv->linkedin }}</a>
                                    </div>
                                </div>
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
    </section>

</body>

</html>