@extends('layouts.app')
@section('content')
    <h2 class="mt-5 text-center">
        Nuestra Galeria
    </h2>
    <div class="container mt-5">
        <div class="card-columns">
            @foreach ($images as $image=>$id)
                <div class="card">
                    <a href="#" data-toggle="modal" data-target="#img{{$id}}">
                        <img class="card-img-top" src="{{$image}}" alt="">
                    </a>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="img{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <button type="button" class="close mr-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <img class="img-fluid rounded" src="{{$image}}" alt="">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
@endsection