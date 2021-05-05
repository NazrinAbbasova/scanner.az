<!DOCTYPE html>
<html lang="en">

@include('front.inc.head')

<body>

  @include('front.components.loader')
  @include('front.inc.header')

  @yield('content')

  @yield('load')

  @if (session('error'))
      {{ session('error') }}
  @endif

  @if (session('success'))
      {{ session('success') }}
  @endif

  @include('front.inc.footer')

  <!-- ========================= scroll-top ========================= -->
  <a href="#" class="scroll-top style3 btn-hover">
    <i class="lni lni-chevron-up"></i>
  </a>

  
  @include('front.inc.scripts')
</body>

</html>