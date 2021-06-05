<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('front.inc.head')

<body>

  @include('front.components.loader')
  @include('front.inc.header')

  @yield('content')

  @yield('load')

  @if (count($errors))
      <ul>
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
      </ul>
  @endif

  @include('front.inc.footer')

  <!-- ========================= scroll-top ========================= -->
  <a href="#" class="scroll-top style3 btn-hover">
    <i class="lni lni-chevron-up"></i>
  </a>

  
  @include('front.inc.scripts')
  @include('front.inc.swal')
</body>

</html>