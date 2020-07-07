<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? ' '  }} {{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.4.1.js') }}" defer></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}" defer></script>
    <script src="{{ asset('js/preload.js') }}" defer></script>
    <script src="{{ asset('js/globalJS.js') }}" defer></script>
    @if ($script ?? $script=null)
    <script src="{{ asset('js/'.($script).'.js') }}" defer></script>
    @endif

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet">


    @if (Route::is("home"))
    <!-- Normalize -->
        <link rel="stylesheet" type="text/css" href="{{asset('ndex/css/normalize.css')}}">
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="{{asset('index/css/bootstrap.css')}}">
        <!-- Animate.css -->
        <link rel="stylesheet" type="text/css" href="{{asset('index/css/animate.css')}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="{{asset('index/fonts/font-awesome-4.1.0/css/font-awesome.min.css')}}">
        <!-- Elegant Icons -->
        <link rel="stylesheet" type="text/css" href="{{asset('index/fonts/eleganticons/et-icons.css')}}">
        <!-- Main style -->
        <link rel="stylesheet" type="text/css" href="{{asset('index/css/cardio.css')}}">

        <!-- Scripts -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('index/js/jquery-1.11.1.min.js')}}"></script>
        <script src="{{asset('index/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('index/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('index/js/wow.min.js')}}"></script>
        <script src="{{asset('index/js/typewriter.js')}}"></script>
        <script src="{{asset('index/js/jquery.onepagenav.js')}}"></script>
        <script src="{{asset('index/js/main.js')}}"></script>
    @else
        <style>
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }
            #loading {
                background-color: #ffd34e;
                height: 100%;
                width: 100%;
                position: fixed;
                z-index: 1;
                margin-top: 0px;
                top: 0px;
            }

            #loading-center {
                width: 100%;
                height: 100%;
                position: relative;
            }

            #loading-center-absolute {
                position: absolute;
                left: 50%;
                top: 50%;
                height: 200px;
                width: 200px;
                margin-top: -100px;
                margin-left: -100px;
            }

            .object {
                width: 50px;
                height: 50px;
                background-color: rgba(255, 255, 255, 0);
                margin-right: auto;
                margin-left: auto;
                border: 4px solid #FFF;
                left: 73px;
                top: 73px;
                position: absolute;
            }

            #first_object {
                -webkit-animation: first_object_animate 1s infinite ease-in-out;
                animation: first_object_animate 1s infinite ease-in-out;
            }

            #second_object {
                -webkit-animation: second_object 1s forwards, second_object_animate 1s infinite ease-in-out;
                animation: second_object 1s forwards, second_object_animate 1s infinite ease-in-out;
            }

            #third_object {
                -webkit-animation: third_object 1s forwards, third_object_animate 1s infinite ease-in-out;
                animation: third_object 1s forwards, third_object_animate 1s infinite ease-in-out;
            }



            @-webkit-keyframes second_object {
                100% {
                    width: 100px;
                    height: 100px;
                    left: 48px;
                    top: 48px;
                }
            }

            @keyframes second_object {
                100% {
                    width: 100px;
                    height: 100px;
                    left: 48px;
                    top: 48px;
                }
            }


            @-webkit-keyframes third_object {
                100% {
                    width: 150px;
                    height: 150px;
                    left: 23px;
                    top: 23px;
                }
            }

            @keyframes third_object {
                100% {
                    width: 150px;
                    height: 150px;
                    left: 23px;
                    top: 23px;
                }
            }


            @-webkit-keyframes first_object_animate {
                0% {
                    -webkit-transform: perspective(100px);
                }

                50% {
                    -webkit-transform: perspective(100px) rotateY(-180deg);
                }

                100% {
                    -webkit-transform: perspective(100px) rotateY(-180deg) rotateX(-180deg);
                }
            }

            @keyframes first_object_animate {
                0% {
                    transform: perspective(100px) rotateX(0deg) rotateY(0deg);
                    -webkit-transform: perspective(100px) rotateX(0deg) rotateY(0deg);
                }

                50% {
                    transform: perspective(100px) rotateX(-180deg) rotateY(0deg);
                    -webkit-transform: perspective(100px) rotateX(-180deg) rotateY(0deg);
                }

                100% {
                    transform: perspective(100px) rotateX(-180deg) rotateY(-180deg);
                    -webkit-transform: perspective(100px) rotateX(-180deg) rotateY(-180deg);
                }
            }



            @-webkit-keyframes second_object_animate {
                0% {
                    -webkit-transform: perspective(200px);
                }

                50% {
                    -webkit-transform: perspective(200px) rotateY(180deg);
                }

                100% {
                    -webkit-transform: perspective(200px) rotateY(180deg) rotateX(180deg);
                }
            }


            @keyframes second_object_animate {
                0% {
                    transform: perspective(200px) rotateX(0deg) rotateY(0deg);
                    -webkit-transform: perspective(200px) rotateX(0deg) rotateY(0deg);
                }

                50% {
                    transform: perspective(200px) rotateX(180deg) rotateY(0deg);
                    -webkit-transform: perspective(200px) rotateX(180deg) rotateY(0deg);
                }

                100% {
                    transform: perspective(200px) rotateX(180deg) rotateY(180deg);
                    -webkit-transform: perspective(200px) rotateX(180deg) rotateY(180deg);
                }
            }




            @-webkit-keyframes third_object_animate {
                0% {
                    -webkit-transform: perspective(300px);
                }

                50% {
                    -webkit-transform: perspective(300px) rotateY(-180deg);
                }

                100% {
                    -webkit-transform: perspective(300px) rotateY(-180deg) rotateX(-180deg);
                }
            }

            @keyframes third_object_animate {
                0% {
                    transform: perspective(300px) rotateX(0deg) rotateY(0deg);
                    -webkit-transform: perspective(300px) rotateX(0deg) rotateY(0deg);
                }

                50% {
                    transform: perspective(300px) rotateX(-180deg) rotateY(0deg);
                    -webkit-transform: perspective(300px) rotateX(-180deg) rotateY(0deg);
                }

                100% {
                    transform: perspective(300px) rotateX(-180deg) rotateY(-180deg);
                    -webkit-transform: perspective(300px) rotateX(-180deg) rotateY(-180deg);
                }
            }
        </style>
    @endif



</head>
<body>
        <div id="app">

            @if (! Route::is('home'))

                <div id="loading">
                    <div id="loading-center">
                        <div id="loading-center-absolute">
                            <div class="object" id="first_object"></div>
                            <div class="object" id="second_object"></div>
                            <div class="object" id="third_object"></div>
                        </div>
                    </div>
                </div>

            @endif

                <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm navbar-fixed-top">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            @auth
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="nav-link {{ set_active_route('student.create') }} " href=" {{ route('student.create') }} ">Etudiants</a>
                                    </li>
                                </ul>
                            @endauth

                            <ul class="navbar-nav ml-auto">
                            @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item">
                                        <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre
                                           onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                            {{ Auth::user()->name }} <span class="text-muted"> (Déconnexion <i class="fa fa-sign-out-alt"></i>) </span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                            <!-- Right Side Of Navbar -->
                            <!-- Authentication Links -->

                        </div>
                    </div>
                </nav>

            @if (Session::has('registered'))
                <div class="alert alert-success text-center alert-dismissible container mt-4">
                    <h6>{{ Session::get('registered') }}</h6>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger container my-3">
                    <ul class="list-group">
                        @foreach ($errors->all() as $error)
                            <li class="list-group-item">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <main class="py-4">
                @yield('content')
            </main>

            @if ( Route::is("home"))
                    <footer>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-6 footer-navigation">
                                    <h3><a href="{{route('home')}}">monImmobilier </a></h3>
                                    <p class="links">
                                        <a href="{{route('login')}}">Se Connecter </a> <strong> · </strong>
                                        <a href="{{route('register')}}">S'enregistrer </a>
                                    </p>
                                    <p>monImmobilier © {{ date('Y') }} - Tous droits réservés </p>
                                </div>
                                <div class="col-xs-6 footer-contacts">
                                    <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                                        <p>Adresse : <span>Zone 3 - Km4, Blvd Marseille</span> Treichville - Abidjan</p>
                                    </div>
                                    <div><i class="fa fa-phone footer-contacts-icon"></i>
                                        <p class="footer-center-info email text-left"> Contact : +225 67081608</p>
                                    </div>
                                    <div><i class="fa fa-envelope footer-contacts-icon"></i>
                                        <p>Mail : jonathan.dieke225@gmail.com </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>

            @endif
        </div>

</body>
</html>
