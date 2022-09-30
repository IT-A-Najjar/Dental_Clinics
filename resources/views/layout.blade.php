<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
{{--        <link rel="stylesheet" href="/style.css">--}}


        <!-- Fonts -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
        <!-- Scripts -->


    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                <img src="/img/icon.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                العيادات السنية
                </a>
                @if(auth()->user())
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" href={{route('sick.create')}}>اضافة مريض</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href={{route('sick.index')}}>عرض المرضى</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href={{route('preview.create')}}>اضافة حالة</a>
                        </li>
                        @if (auth()->user()->is_admin)
                        <li class="nav-item">
                        <a class="nav-link" href={{route('illnesses.create')}}>اضافة مرض</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href={{route('illnesses.index')}}>عرض المرض</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href={{route('users')}}>الاطباء</a>
                        </li>
                            <li class="nav-item">
                                <a class="nav-link" href={{route('createuser')}}>انشاء طبيب</a>
                            </li>
                        @endif
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell" ></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="head text-light bg-dark">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-12">
                                            <span>Notifications ({{\Illuminate\Support\Facades\Auth::user()->unreadNotifications->count()}})</span>
                                            @if(\Illuminate\Support\Facades\Auth::user()->unreadNotifications->count()!=0)
                                                <a href="{{route('sick.index')}}" class="float-right text-light">read of all</a>
                                            @endif
                                        </div>
                                </li>
                                @foreach(Auth::user()->unreadNotifications as $notification)
                                <li class="notification-box">
                                    <div class="col-lg-8 col-sm-8 col-8">
                                        <strong class="text-info">{{$notification->data['user_create']}}</strong>
                                        <div>
                                            <a href="{{route('sick.show',$notification->data['id_preview'])}}" style="color: #000000">ارسل اليك مريض جديد باسم: {{$notification->data['name']}}</a>
                                        </div>
                                        <small class="text-warning">{{$notification->created_at}}</small>
                                    </div>
                                </li>
                                @endforeach
                                <li class="footer bg-dark text-center">
                                    <a href="" class="text-light">View All</a>
                                </li>
                            </ul>
                        </li>
                        <form  method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-nav-link>
                        </form>
                    </ul>
                    </div>
                @endif
            </div>
        </nav>


            <div class="font-sans text-gray-900 antialiased">
                @yield('componemt')
            </div>


    </body>
</html>
