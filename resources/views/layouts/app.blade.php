<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>@yield('title','Hacienda Amelia Sofia')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>

    
        <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top " >
            <div class="container-fluid">
                <a class="navbar-brand ">
                <img class="img-fluid" src="{{asset('/images/logo.png')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-target="#menu" data-toggle="collapse">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="collapse navbar-collapse" id="menu" >
                    <ul class="navbar-nav ml-auto">
                        @foreach ($links as $link => $text) 
                            <li class="nav-item text-center">
                                <a class=" nav-link active"  href="{{$link}}">{{$text}}</a>
                            </li>
                            
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
    
    {{-- <div class="contaner bg-primary" style="height:400px"></div>
    <div class="contaner bg-dark" style="height:400px"></div>
    <div class="contaner bg-danger" style="height:400px"></div> --}}
            

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Entrar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrar</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            <div class="content">
               @yield('content')
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

    <footer>
        <div class="container-fluid padding">
            <div class="row ">
                <div class="col-md-4 align-self-center ">
                    <img  src="{{asset('/images/logo.png')}}" alt="">
                    <p class=" text-justify"> Vive una experiencia unica en Hacienda Amelia Sofia, junto a tus amigos y familiares, disfruta de nuestros espacios recreativos, la gastronomia unica y el confortante ambiente que tenemos para ti.
                    </p>
                    <button class="btn btn-primary" type="button">Reservar</button>
                </div>
                <div class="col-md-4 align-self-center text-center">
                    <hr class="light">
                    <h3> <b> Nuestros Horarios </b></h3>
                    <hr class="light">
                    <p> Lunes a viernes: 8 am - 6 pm</p>
                    <p> Sabados y Domingos: 9 am - 11 pm </p> 
                </div>
                <div class="col-md-4 align-self-center text-center">
                    <hr class="light">
                    <h3> <b>Informacion Adicional</b></h3>
                    <hr class="light">
                    <p> Lunes a viernes: 8 am - 6 pm</p>
                    <p> Sabados y Domingos: 9 am - 11 pm </p> 
                </div>
                <div class="col-md-12 text-center" style="background-color: #028090">
                   <p> © 2019 Copyright Hacienda Amelia Sofia | Powered by<p/>
                    <a href="#"> CrifQui</a>
                </div>
            </div>
        </div>
    </footer>
</html>
