@extends('front.layout.master')
@section('title', 'Qeydiyyat')
@section('content')

<section>
  <div class="container">

    <div class="auth-box">

      <div class="row">

        <div class="col-md-6">

          <div class="form-container">
            <div class="register-form">
              <h2>Qeydiyyat</h2>
              <div class="account-type">
                <div class="register-applicant">Namizəd</div>
                <div class="register-company">Şirkət</div>
              </div>
              <form method="post" action="{{ route('register.store') }}">
                @csrf
                <input type="hidden" name="type" value="applicant">
                <div class="applicant-form">
                  <label for="name">Ad *</label>
                  <input type="text" name="firstname" placeholder="Adınızı daxil edin">
                  <label for="surname" >Soyad *</label>
                  <input type="text" name="lastname" placeholder="Soyadınızı daxil edin">
                  <label for="email">Email *</label>
                  <input type="email" name="email" placeholder="Emailinizi daxil edin">
                  <label for="password">Şifrə *</label>
                  <input type="password" name="password" placeholder="Şifrə təyin edin">
                  <button type="submit">Qeydiyyatdan keç</button>
                </div>
              </form>

              <form method="post" action="{{ route('register.store') }}">
                @csrf
                <input type="hidden" name="type" value="company">
                <div class="company-form">
                  <label for="company-name">Şirkət adı *</label>
                  <input type="text" required name="company" placeholder="Şirkət adını daxil edin">
                  <label for="mobile">Mobil nömrə</label>
                  <input type="text" name="phone" placeholder="Nömrənizi daxil edin">
                  <label for="email">Email *</label>
                  <input type="email" required placeholder="Emailinizi daxil edin">
                  <label for="password" >Şifrə *</label>
                  <input type="password" required name="password" placeholder="Şifrə təyin edin">
                  <button type="submit">Qeydiyyatdan keç</button>
                </div>
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