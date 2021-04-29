@extends('front.layout.master')
@section('content')
<section class="auth">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
  
        <div class="auth-box">
          <div class="form-container">
            <div class="register-form">
              <h2>Qeydiyyat</h2>
              <div class="account-type">
                <div class="register-applicant">Namizəd</div>
                <div class="register-company">Şirkət</div>
              </div>
              <div class="applicant-form">
                <input type="text" placeholder="Adınızı daxil edin">
                <input type="text" placeholder="Soyadınızı daxil edin">
                <input type="email" placeholder="Emailinizi daxil edin">
                <input type="password" placeholder="Şifrə təyin edin">
              </div>
              <div class="company-form">
                <input type="text" placeholder="Şirkət adını daxil edin">
                <input type="text" placeholder="Nömrənizi daxil edin">
                <input type="email" placeholder="Emailinizi daxil edin">
                <input type="password" placeholder="Şifrə təyin edin">
              </div>
  
              <button type="submit">Qeydiyyatdan keç</button>
            </div>
            <div class="login-form">
              <h2>Giriş</h2>
              <input type="email" placeholder="Emailinizi daxil edin">
              <input type="password" placeholder="Şifrə təyin edin">
              <div class="forgot-password">Şifrəni unutdum</div>
              <button type="submit">Daxil ol</button>
            </div>
  
            <div class="forgot-form">
              <h2>Şifrəni unutdum</h2>
              <input type="email" placeholder="Emailinizi daxil edin">
              <button type="submit">Göndər</button>
            </div>
          </div>
          <div class="overlay-container">
            <img src="{{ asset('static/front/images/auth-img.png') }}" alt="auth">
            <button type="submit" class="page-login">Daxil ol</button>
            <button type="submit" class="page-register">Qeydiyyatdan keç</button>
          </div>
  
        </div>
      </div>
    </div>
  </div>
</section>
@endsection