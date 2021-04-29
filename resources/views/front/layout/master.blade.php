<!DOCTYPE html>
<html lang="en">

@include('front.inc.head')

<body>

  @include('front.inc.header')

  @yield('content')

  <script src="{{ asset('static/dashboard/js/front/app.js') }}"></script>
</body>

</html>