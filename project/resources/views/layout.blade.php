<!DOCTYPE html>
<html lang="en">
<head>
    <title>العيادات السنية</title>
    <link rel="icon" href="/img/icon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">--}}

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <img src="img/icon.png" style="width: 75px">
        <a class="navbar-brand" href="/">العيادات <span>السنية</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                @if(auth()->user())
                <li class="nav-item"><a href="{{route('dashboard')}}" class="nav-link"> البروفايل </a></li>
                <li class="nav-item"><a href="{{route('sick.create')}}" class="nav-link">اضافة مريض</a></li>
                <li class="nav-item"><a href="{{route('sick.index')}}" class="nav-link">عرض المرضى الغير مخدمين</a></li>
                <li class="nav-item"><a href="{{route('preview.index')}}" class="nav-link">عرض المرضى المخدمين</a></li>
                @if(auth()->user()->is_admin)
                <li class="nav-item"><a href="{{route('illnesses.create')}}" class="nav-link">اضافة مرض</a></li>
                <li class="nav-item"><a href="{{route('illnesses.index')}}" class="nav-link">عرض الامراض</a></li>
                <li class="nav-item"><a href="{{route('users')}}" class="nav-link">الاطباء</a></li>
                <li class="nav-item"><a href="{{route('createuser')}}" class="nav-link">اضافة طبيب</a></li>
                @endif
                <li class="nav-item">
                    <form  method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                     this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-nav-link>
                    </form>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<section class="home-slider owl-carousel">
    <div class="slider-item bread-item " style="background-image: url('images/Artboard_3.png');" data-stellar-background-ratio="0.2">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
            <div class="row slider-text align-items-end">
                <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                    <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">@yield('title')</h1>
                </div>
            </div>
        </div>
    </div>
</section>
    <div class="font-sans text-gray-900 antialiased">
                    @yield('componemt')
    </div>

<div id="ftco-loader" class="show fullscreen"><img class="circular" width="80px" height="80px" src="img/icon.png"></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>
