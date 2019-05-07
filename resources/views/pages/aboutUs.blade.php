@extends('layouts.app')
@section('carousel')
    Acerca de Nosotros
@endsection
@section('content')
<div class="container">

    <!-- Intro Content -->
    <div class="row mt-5" >
        <div class="col-lg-6">
        <img class="img-fluid rounded mb-4" src="http://placehold.it/750x450" alt="">
        </div>
        <div class="col-lg-6">
            <h2>Bienvenidos</h2>
            <p>Somos una empresa comprometida que busca brindarle a nuestros clientes espacios sanos y divertidos para que compartir con amigos y familiares. Decidete a pasar un dia de sol en uno de los sitios mas agradables de toda la ciudad.</p>
            <p>Ven a la Hacienda Amelia Sofia y vive la diversion al maximo, podras disfrutar de nuestras zonas de recreacion con capacidad para 200 personas, espacios aptos para todos tus amigos y familiares  </p>
            <button type="button" onclick="location.href='/services'" class="btn btn-outline-primary"> Conoce más

            </button>
        </div>
    </div>

    <div class="container text-center mt-5">
        <h2 > Nuestros Clientes Nos Aman</h2>

    </div>
@endsection