<!DOCTYPE html>
<html lang="en">

@include('front.inc.head')

<body>

  @include('front.inc.header')

  @yield('content')

  @if (session('error'))
      {{ session('error') }}
  @endif

  @if (session('success'))
      {{ session('success') }}
  @endif

  <script src="{{ asset('static/front/js/app.js') }}"></script>
</body>

</html>