@extends('front.layout.master')
@section('title', auth()->user()->firstname.' '.auth()->user()->lastname)
@section('content')
<section class="profile margin-page">
    <div class="container">
        <div class="row">
            @include('front.applicant.sidebar')
            <div class="col-lg-8">
                <div class="profile-content">
                    <div class="content-title">
                        <h5 class="font-weight-700 pull-left text-uppercase">İstifadəçi profili</h5>
                    </div>
                    <form method="post" action="{{ route('applicant.update') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Ad</label>
                                    <input name="firstname" value="{{ auth()->user()->firstname }}" type="text" placeholder="Adınız" required="required">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="lastname">Soyad</label>
                                    <input name="lastname" value="{{ auth()->user()->lastname }}" type="text" placeholder="Soyadınız" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" type="email" value="{{ auth()->user()->email }}"  placeholder="Emailiniz" required="required">
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
<link rel="stylesheet" href="{{ asset('static/front/css/icons.min.css') }}" />
<link rel="stylesheet" href="{{ asset('static/front/css/profile.css') }}">
@endsection