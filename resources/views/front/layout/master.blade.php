<!DOCTYPE html>
<html lang="en">

@include('front.inc.head')

<body>

  @include('front.inc.header')

  @yield('content')

  <script src="{{ asset('static/front/js/app.js') }}"></script>
</body>

</html>