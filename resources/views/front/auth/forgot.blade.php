@extends('front.layout.master')
@section('content')
<section class="forgot">

    <div class="container">

      <div class="auth-box">
        <div class="form-container">
          <div class="forgot-form">
            <h2>Şifrəni unutdum</h2>
            <form>
              <label for="email">Email</label>
              <input type="email" placeholder="Emailinizi daxil edin">
              <button type="submit">Göndər</button>
            </form>
          </div>
        </div>

        @include('front.auth.imagebox')

      </div>

    </div>
</section>
@endsection