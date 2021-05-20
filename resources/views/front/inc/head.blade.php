<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', env('APP_NAME'))</title>    
    <meta name="csrf-token"    content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('static/front/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('static/front/css/LineIcons.2.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('static/front/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('static/front/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('static/front/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('static/front/css/main.css') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('static/front/images/logo/logo.svg') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
</head>