@extends('front.layout.master')
@section('title', auth()->user()->name.' '.auth()->user()->lastname)
@section('content')
<section class="profile margin-page">
    <div class="container">
        <div class="row">
            @include('front.applicant.sidebar')
            <div class="col-xl-9 col-lg-8">
                <div class="profile-content">
                    <div class="content-title">
                        <h5 class="font-weight-700 pull-left text-uppercase">İstifadəçi profili</h5>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Ad</label>
                                    <input name="name" type="text" placeholder="Adınız" required="required">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="surname">Soyad</label>
                                    <input name="surname" type="text" placeholder="Soyadınız" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" type="text" placeholder="Emailiniz" required="required">
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