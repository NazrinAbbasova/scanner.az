<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
      <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li>
            <a href="{{route('dashboard')}}"
              ><i class="menu-icon ti-bar-chart-alt"></i>Dashboard
            </a>
          </li>

          <li>
            <a href="">
              <i class="menu-icon ti-arrow-circle-right"></i>
              Visit website
            </a>
          </li>

          {{-- Languages --}}
          <li>
            <a href="{{ route('dashboard.languages') }}" >
              <i class="menu-icon ti-world"></i>
              Languages  
            </a>
          </li>

          {{-- Translations --}}
          <li>
            <a href="{{ route('dashboard.translations') }}">
              <i class="menu-icon fas fa-language"></i>
              Translations
            </a>
          </li>

        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </nav>
  </aside>
  <!-- /#left-panel -->