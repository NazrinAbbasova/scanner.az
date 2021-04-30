@extends('front.layout.master')
@section('content')
<section>
  <div class="container">
    <div class="auth-box">
      <div class="row">
        <div class="col-md-6">
          <div class="form-container">
            <div class="reset-form">
              <h2>Şifrəni yenilə</h2>
              <form>
                <label for="password">Yeni şifrə</label>
                <input type="password" placeholder="Yeni şifrə təyin edin">
                <label for="password">Yeni şifrənin təkrarı</label>
                <input type="password" placeholder="Yeni şifrəni təsdiqləyin">
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