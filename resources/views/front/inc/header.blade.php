<header>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="logo">
          <a href="{{ route('home') }}">
            <img src="{{ asset('static/front/images/logo.png') }}" alt="" />
          </a>
        </div>
      </div>
      <div class="nav col-md-9">
        <a href="{{ route('about') }}">Haqqımızda</a>
        <a href="{{ route('how-it-works') }}">Sistem necə işləyir?</a>
        <a href="{{ route('contact') }}">Əlaqə</a>
        <a class="button" href="{{ route('login') }}">Daxil ol</a>
        <a class="button" href="{{ route('register') }}">Qeydiyyat</a>
      </div>
    </div>
  </div>
</header>