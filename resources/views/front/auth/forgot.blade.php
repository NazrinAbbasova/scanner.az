@extends('front.layout.master')
@section('title', 'Şifrəni unutdum')
@section('content')

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="auth-box">
          <div class="row">
    
            <div class="col-md-6">
              <div class="form-container">
                <div class="forgot-form">
                  <h2>Şifrəni unutdum</h2>
                  <form method="post" action="{{ route('forgot.submit') }}">
                    @csrf
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Emailinizi daxil edin">
                    <button type="submit">Göndər</button>
                  </form>
                </div>
              </div>
            </div>
    
            <div class="col-md-6">
              @include('front.auth.imagebox', ['src' => 'static/front/images/img3.png'])
            </div>
    
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('load')
    <link rel="stylesheet" href="{{ asset('static/front/css/auth.css') }}">
@endsection