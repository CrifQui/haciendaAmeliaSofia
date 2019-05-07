<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>@yield('title','Hacienda Amelia Sofia')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/modern.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <a  href="/">
                        <img class="rounded-circle" src="{{asset('images/logo.png')}}" >
                    </a>
                </div>
                <div class="col-auto  d-none d-sm-block text-center">
                    <ul class="list-inline mb-0">
                            
                        <li class="list-inline-item">
                            <a class="btn btn-outline-primary btn-social text-center rounded-circle" href="#">
                                <i class="fas fa-phone-volume"></i>
                            </a>
                            <small class="text-muted">¿Tienes alguna duda?
                            </small>
                            <small class="text-muted">
                                    <br>+593 99-539-8632
                            </small>
                            
                        </li>
                        
                        <li class="list-inline-item">
                            <a class="btn btn-outline-primary btn-social text-center rounded-circle" href="#">
                                <i class="fas fa-envelope"></i>
                            </a>
                            <small class="text-muted">
                                ¿Tienes alguna duda?
                            </small>
                            <small class="text-muted">
                                    <br>haci@gmail.com
                            </small>
                        </li>  
                    </ul>
                </div>
                    
            </div>
        </div>
            
        <nav class="navbar  navbar-expand-lg navbar-ligth bg-white sticky-top">
            <div class="container">
                    
                <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="navbar-toggler-icon fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" href="/aboutUs">Nosotros</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" href="/services">Servicios</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownServicios" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Servicios
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownServicios">
                            <a class="dropdown-item" href="/services">Piscinas</a>
                            <a class="dropdown-item" href="/services">Canchas Deportivas</a>
                            <a class="dropdown-item" href="/services">Restaurantes</a>
                            <a class="dropdown-item" href="/services">Caballos</a>
                            <a class="dropdown-item" href=/services">Single Portfolio Item</a>
                        </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/reserve">Reservaciones</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>


                </div>
            </div>
        </nav>
        <header>
            <div id="slides" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li class="active" data-target="#slides" data-slide-to="0"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-fluid d-block w-100" src="http://placehold.it/1900x500" alt="">
        
                        <div class="carousel-caption d-none d-md-block">
                            <h1>@yield('carousel','Hacienda Amelia Sofia')</h1>
                            @yield('button')
                        </div>
                    </div>
                </div> 
            </div>
        </header>

        <div class="content">
            @yield('content')
        </div>
        
        <footer class="footer text-center text-white">
            <div class="container-fluid py-5 bg-dark">
                <div class="row">
                    <div class="col-md-3 mb-5 mb-lg-0">
                        <img class="rounded-circle" src="{{asset('images/logo.png')}}" >
                        <hr class="bg-light">
                        <p class="lead mb-0">Ven y disfruta del confortante lugar y de todos nuestors sevicios que tenemos para ti.</p>
                    </div>
                <div class="col-md-3 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Ubicacion</h4>
                    <hr class="bg-light">
                    <p class="lead mb-0">2215 John Daniel Drive
                    <br>Clark, MO 65243</p>
                </div>
                <div class="col-md-3 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Redes Sociales</h4>
                    <hr class="bg-light">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.facebook.com/hcda.amelia">
                            <i class="fab fa-fw fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                            <i class="fab fa-fw fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://twitter.com/HaciendaSofia?lang=es">
                            <i class="fab fa-fw fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                            <i class="fab fa-fw fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4 class="text-uppercase mb-4">Contactanos</h4>
                    <hr class="bg-light">
                    <p class="lead mb-0"> +593 99-539-8632</p>
                </div>
                </div>
            </div>
        </footer>
        <div class="copyright py-4 text-center text-white bg-dark">
            <div class="container">
                <small>Copyright &copy; Hacienda Amelia Sofia | Powered by
                    <a class="text-light" href="www.crifqui.com">CrifQui</a>
                </small>
                
            </div>
        </div>

        {{-- scrips --}}
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>

    </body>
</html>
