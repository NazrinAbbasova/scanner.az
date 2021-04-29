@extends('front.layout.master')
@section('content')
<section class="reset">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="auth-box">
          <div class="form-container">
            <div class="reset-form">
              <h2>Şifrəni yenilə</h2>
              <input type="password" placeholder="Yeni şifrə təyin edin">
              <input type="password" placeholder="Yeni şifrəni təsdiqləyin">
              <button type="submit">Təsdiqlə</button>
            </div>
          </div>
          <div class="overlay-container reset">
            <img src="/assets/images/auth-img.png" alt="auth">
            <a href="auth.html">
              <button type="submit" class="page-login">Daxil ol</button>
            </a>
          </div>
        </div>
      </div>
    </div>
</div>
</section>
@endsection