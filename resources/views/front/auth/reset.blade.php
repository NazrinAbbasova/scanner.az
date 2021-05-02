@extends('front.layout.master')
@section('title', 'Şifrəni yenilə')
@section('content')
<section>
  <div class="container">
    <div class="auth-box">
      <div class="row">

        <div class="col-md-6">
          <div class="form-container">
            <div class="reset-form">
              <h2>Şifrəni yenilə</h2>
              <form method="post" action="{{ route('reset.submit') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <label for="password">Yeni şifrə *</label>
                <input type="password" required name="password" placeholder="Yeni şifrə təyin edin">
                <label for="password">Yeni şifrənin təkrarı *</label>
                <input type="password" required name="password_repeat" placeholder="Yeni şifrəni təsdiqləyin">
                <button type="submit">Təsdiqlə</button>
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