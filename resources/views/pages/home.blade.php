@extends('layouts.app')

@section('button')
<button type="button" class="btn btn-outline-primary" onclick="location.href='/reserve'">
    <h4 class="text-white">Reserva ya!</h4>
</button>
    
@endsection
@section('content')
 
    <div id="info-container" >
        <div class="container">
            <div class="row align-items-center" >
                
                <div class="text-center">
                    <h2><br>Vive la experiencia <br></h3>
                    <p class="text-muted">Vive una experiencia unica junto a tus amigos y familiares, disfruta de nuestros espacios recreativos, la gastronomia unica de nuestro restaurante y el confortante ambiente que tenemos para ti. </p><br><br>
                </div>
           </div>
        </div>
    </div>
    <div class="container">
        @include('layouts.service')
    </div>

@endsection

