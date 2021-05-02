<!DOCTYPE html>
<html class="no-js" lang="">
  <!--<![endif]-->
  @include('dashboard.inc.head')

  <body>
    @include('dashboard.inc.leftpanel')

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
    @include('dashboard.inc.header')
      @if (count($errors))
      <div class="errors">
          <ul>
            @foreach ($errors->all() as $error)
            <li class="alert alert-danger">{{$error}}</li>
            @endforeach
          </ul>
      </div>
      @endif

      @yield('content')

      <div class="clearfix"></div>

      @include('dashboard.inc.footer')
    </div>
    <!-- /#right-panel -->

    @include('dashboard.inc.scripts')

    @yield('load')
    
  </body>
</html>
