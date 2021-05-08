@extends('front.layout.master')
@section('title', auth()->user()->company)

@section('content')
<section class="profile margin-page">
    <div class="container">
        <div class="row">
            @include('front.company.sidebar')
            <div class="col-xl-9 col-lg-8">
                <div class="profile-content">
                    <div class="content-title">
                        <h5 class="font-weight-700 pull-left text-uppercase">Şirkət profili</h5>
                    </div>
                    <form method="post" action="{{ route('company.update') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="company-name">Şirkət adı</label>
                                    <input name="company" type="text" value="{{ auth()->user()->company }}" placeholder="Şirkət adı" required="required">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="address">Şirkət ünvanı</label>
                                        <input name="address" type="text" value="{{ auth()->user()->address }}" placeholder="Şirkət ünvanı">
                                    </div>
                                </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="mobile">Mobil nömrə</label>
                                    <input name="phone" type="text" value="{{ auth()->user()->phone }}" placeholder="Mobil nömrəniz" required="required">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input name="email" value="{{ auth()->user()->email }}" type="email" placeholder="Emailiniz" required="required">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="website">Vebsayt</label>
                                    <input name="website" type="text" value="{{ auth()->user()->website }}" placeholder="www.example.com">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="linkedin">Linkedin</label>
                                    <input name="linkedin" type="text" value="{{ auth()->user()->linkedin }}" placeholder="https://www.linkedin.com/in/example/" >
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input name="facebook" type="text" value="{{ auth()->user()->facebook }}" placeholder="https://www.facebook.com/example/" >
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
    <link rel="stylesheet" href="{{ asset('static/front/css/icons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('static/front/css/profile.css') }}">
@endsection