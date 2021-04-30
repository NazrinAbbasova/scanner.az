@extends('front.layout.master')
@section('content')
<section>
  <div class="container">
    <div class="auth-box">
      <div class="form-container">
        <div class="login-form">
          <h2>Giriş</h2>
          <form>
            <label for="email">Email</label>
            <input type="email" placeholder="Emailinizi daxil edin">
            <label for="password">Şifrə</label>
            <input type="password" placeholder="Şifrənizi daxil edin">
            <a href="forgot-pass.html">
              <div class="forgot-password">Şifrəni unutdum</div>
            </a>
            <button type="submit">Daxil ol</button>
          </form>
        </div>
      </div>
      
      @include('front.auth.imagebox')

    </div>

  </div>
  </div>
</section>
@endsection