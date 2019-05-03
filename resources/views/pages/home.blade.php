@extends('layouts.app')
@section('content')

    <div id="slides" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li class="active" data-target="#slides" data-slide-to="0"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid" src="http://lorempixel.com/1400/400/animals?1" alt="">
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="http://lorempixel.com/1400/400/animals?2" alt="">
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="http://lorempixel.com/1400/400/animals?3" alt="">
            </div>
        </div>
        <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
        <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div id="info-container" >
        <div class="container">
            <div class="row align-items-center" >
                
                <div class="text-center">
                    <h2><br><br>Vive la experiencia <br></h3>
                    <p class="text-muted">Vive una experiencia unica junto a tus amigos y familiares, disfruta de nuestros espacios recreativos, la gastronomia unica de nuestro restaurante y el confortante ambiente que tenemos para ti. </p><br><br>
                </div>
           </div>
        </div>
    </div>
    <div class="container">
        <div class="row ">
            <div class="col-md-3">
                <img class="rounded mx-auto d-block" src="http://lorempixel.com/200/200/animals?6" alt="">
            </div>
            <div class="col-md-3">
                <img  class="rounded mx-auto d-block" src="http://lorempixel.com/200/200/animals?6" alt="">
            </div>
            <div class="col-md-3">
                <img class="rounded mx-auto d-block" src="http://lorempixel.com/200/200/animals?6" alt="">
            </div>
            <div class="col-md-3">
                <img class="rounded mx-auto d-block" src="http://lorempixel.com/200/200/animals?6" alt="">
            </div>
        </div>
    </div>

@endsection

