@extends('front.layout.master')
@section('title', auth()->user()->company)

@section('content')
<section class="profile margin-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="user-menu">
                    <div class="profile-img">
                        <div class="avatar-wrapper">
                            <img class="profile-pic" src="{{ ('static/front/images/avatar.png') }}" />
                            <div class="upload-button">
                            </div>
                            <input class="file-upload" type="file" accept="image/*" />
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a class="active" href="company-profile.html">
                                <i class="fal fa-building"></i>
                                <span>Haqqımızda</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fal fa-id-card"></i>
                                <span>Vakansiyalara bax</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fal fa-file-plus"></i>
                                <span>Vakansiya yarat</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fal fa-chart-pie"></i>
                                <span>Ümumistatistika</span>
                            </a>
                        </li>
                        <li>
                            <a href="change-password.html">
                                <i class="fal fa-key"></i>
                                <span>Şifrəni dəyiş</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fal fa-sign-out"></i>
                                <span>Çıxış</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="profile-content">
                    <div class="content-title">
                        <h5 class="font-weight-700 pull-left text-uppercase">Şirkət profili</h5>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="company-name">Şirkət adı</label>
                                    <input name="name" type="text" value="{{ auth()->user()->company }}" placeholder="Şirkət adı" required="required">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="mobile">Mobil nömrə</label>
                                    <input name="phone" type="text" value="{{ auth()->user()->phone }}" placeholder="Mobil nömrəniz"
                                        required="required">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input name="email" type="text" placeholder="Emailiniz" required="required">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="update">Dəyişiklikləri yadda saxla</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('load')
    <link rel="stylesheet" href="{{ asset('static/front/css/profile.css') }}">
@endsection