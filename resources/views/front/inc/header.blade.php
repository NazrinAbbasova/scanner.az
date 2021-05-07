<!-- Start Header Area -->
<header class="header style3">
  <div class="navbar-area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand logo" href="{{ route('home') }}">
              <img class="primary-logo" src="{{ asset('static/front/images/logo/logo.png') }}" alt="Logo" />
              <img class="alt-logo" src="{{ asset('static/front/images/logo/logo.png') }}" alt="Logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
              <ul id="nav" class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="page-scroll" href="#home">Əsas səhifə</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll" href="#about">Haqqımızda</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll" href="#how-it-works">Sistem necə İşləyir?</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll" href="#contact">Əlaqə</a>
                </li>
              </ul>
            </div>
            <!-- navbar collapse -->
            @auth
            <div class="button">
              @if (auth()->user()->type == 'applicant')
              <a href="{{ route('applicant.edit') }}" class="btn">Hesab </a>
              @else
              <a href="{{ route('company.edit') }}" class="btn">Hesab </a>
              @endif
              
            </div>
            @endauth
            
            @guest
            <div class="button">
              <a href="{{ route('login') }}" class="btn">Daxil ol</a>
            </div>
            <div class="button">
              <a href="{{ route('register') }}" class="btn">Qeydiyyat</a>
            </div>
            @endguest
          </nav>
          <!-- navbar -->
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- navbar area -->
</header>
<!-- End Header Area -->