@extends('front.layout.master')
@section('content')
<section>
  <div class="container">
    <div class="auth-box">
        <div class="form-container">
            <div class="register-form">
              <h2>Qeydiyyat</h2>
              <div class="account-type">
                <div class="register-applicant">Namizəd</div>
                <div class="register-company">Şirkət</div>
              </div>
              <form>
                <div class="applicant-form">
                  <label for="name">Ad</label>
                  <input type="text" placeholder="Adınızı daxil edin" />
                  <label for="surname">Soyad</label>
                  <input type="text" placeholder="Soyadınızı daxil edin" />
                  <label for="email">Email</label>
                  <input type="email" placeholder="Emailinizi daxil edin" />
                  <label for="password">Şifrə</label>
                  <input type="password" placeholder="Şifrə təyin edin" />
                </div>
  
                <div class="company-form">
                  <label for="company-name">Şirkət adı</label>
                  <input type="text" placeholder="Şirkət adını daxil edin" />
                  <label for="mobile">Mobil nömrə</label>
                  <input type="text" placeholder="Nömrənizi daxil edin" />
                  <label for="email">Email</label>
                  <input type="email" placeholder="Emailinizi daxil edin" />
                  <label for="password">Şifrə</label>
                  <input type="password" placeholder="Şifrə təyin edin" />
                </div>
                <button type="submit">Qeydiyyatdan keç</button>
              </form>
            </div>
          </div>
      
      @include('front.auth.imagebox')

    </div>

  </div>
  </div>
</section>

@endsection