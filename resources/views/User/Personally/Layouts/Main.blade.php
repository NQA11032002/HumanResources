<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2?family= Manrope :wght@200;300 & display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/User/Personally/font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/User/Personally/index.css') }}">

    @yield('css')
</head>

<body>
    @include('User/Personally/Blocks/Header')

    <main>
        <div class="content">
            @yield('content')
        </div>
    </main>


    @include('User/Personally/Blocks/Footer')

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
        const paginations = document.querySelectorAll('.nav-link');
        let url = location.href.split('/');

        paginations.forEach((e) => {
            e.getAttribute('data-page') === url[3] ? e.classList.add('active') : e.classList.remove('active');
        })

        url[3] === '' ? paginations[0].classList.add('active') : null;
    </script>

    @yield('js')
</body>

</html>
