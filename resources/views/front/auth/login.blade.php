@extends('front.layout.master')
@section('title', 'Giriş')
@section('content')

<section>

  <div class="container">
    <div class="auth-box">
      <div class="row">
        
        <div class="col-md-6">
          <div class="form-container">
            <div class="login-form">
              <h2>Giriş</h2>
              <form method="post" action="{{ route('login.attempt') }}">
                @csrf
                <label for="email">Email *</label>
                <input type="email" name="email" placeholder="Emailinizi daxil edin">
                <label for="password">Şifrə *</label>
                <input type="password" name="password" placeholder="Şifrənizi daxil edin">
                <button type="submit">Daxil ol</button>
                <a href="{{ route('forgot') }}">
                  <div class="forgot-password">Şifrəni unutdum</div>
                </a>
              </form>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          @include('front.auth.imagebox')
        </div>

      </div>
    </div>
  </div>

</section>

@endsection