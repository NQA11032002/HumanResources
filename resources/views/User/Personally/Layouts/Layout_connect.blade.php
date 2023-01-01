<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2?family= Manrope :wght@200;300 & display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/User/Personally/font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/User/Personally/connect.css') }}">

    @yield('css')

</head>

<body>
    <div class="connect">
        <div class="connect__left">
            <div class="connect__title">
                <div class="connect__title--image">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                </div>
                @yield('title_content')
            </div>

            <div class="connect__form">
                @yield('content')
                <hr>
            </div>

            <div class="">
                <h3 class="h3 helper">Trợ giúp:</h3>
                <div class="d-flex contact">
                    <p><i class="fa-solid fa-phone"></i> 1900 63 85 52</p>
                    <p><i class="fa-solid fa-envelope"></i> csks@gmail.com</p>
                </div>
            </div>
        </div>

        <div class="connect__right  d-flex align-items-center justify-content-center">
            <img src="{{ asset('images/login.svg') }}" alt="">
        </div>
    </div>

    @yield('js')
</body>

</html>
