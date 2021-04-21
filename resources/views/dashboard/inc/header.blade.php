<!-- Header-->
<header id="header" class="header">
    <div class="top-left">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ route('dashboard') }}"
          ><img src="" alt="Logo"
        /></a>
        <a class="navbar-brand hidden" href="{{ route('dashboard') }}"
          ><img src="" alt="Logo"
        /></a>
        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
      </div>
    </div>
    <div class="top-right">
      <div class="header-menu">
        <div class="header-left">
        </div>

        <div class="language-area user-area dropdown float-right">
          <a
            href="#"
            class="dropdown-toggle active"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
          {{app()->getLocale()}}
          </a>

          <div class="user-menu dropdown-menu">
            @foreach ($languages as $l)
            @if ($l->slug != app()->getLocale())
            <a class="nav-link" href="{{ route('locale', $l->slug) }}">
              {{$l->name}}
            </a>
            @endif
            
            @endforeach
            
          </div>
        </div>
        <div class="language-area user-area dropdown float-right">
          <a href="">
          <i class="menu-icon ti-settings"></i>
          </a>
        </div>
      </div>
    </div>
  </header>
  <!-- /#header -->