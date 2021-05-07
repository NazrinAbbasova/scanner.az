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
                        <h5 class="font-weight-700 pull-left text-uppercase">Şifrəni dəyiş</h5>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="password">Hazırki şifrə</label>
                                    <input name="password" type="password" placeholder="Hazırki şifrəniz"
                                        required="required">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="password">Yeni şifrə</label>
                                    <input name="password" type="password" placeholder="Yeni şifrəniz"
                                        required="required">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="update">Dəyiş</button>
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