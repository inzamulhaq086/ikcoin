<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ik coin</title>
    <link rel="stylesheet" href="{{asset('frontend/css/tailwind.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/brands.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/solid.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/regulr.css')}}">
</head>

<body class="Work Sans">
    @include('frontend.layouts.header')
    @yield('content')
    <!-- =============================FOOTER START =========================== -->    
    @include('frontend.layouts.footer')
    <!-- =============================FOOTER END =========================== -->
    <script defer src="{{asset('frontend/js/brands.js')}}"></script>
    <script defer src="{{asset('frontend/js/fontawesome.js')}}"></script>
    <script defer src="{{asset('frontend/js/regular.js')}}"></script>
    <script defer src="{{asset('frontend/js/solid.js')}}"></script>    
    <script>
        let mainMenu = document.getElementById('main-menu');
        let mainBtn = document.getElementById('main-btn');

        mainBtn.addEventListener('click', function () {
            mainMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>