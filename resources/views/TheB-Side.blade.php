@extends('plantilla')
@section('fullwidth')
<div class="TheB-Side">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('assets/img/imagen1.jpg') }}" alt="First slide" style="height: 60vh; object-fit: cover; filter: brightness(0.4);">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets/img/imagen2.jpg') }}" alt="Second slide" style="height: 60vh; object-fit: cover; filter: brightness(0.4);">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets/img/imagen3.jpg') }}" alt="Third slide" style="height: 60vh; object-fit: cover; filter: brightness(0.4);">
            </div>
        </div> <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
@endsection
@section('contenido')
<!--CARDS-->
<div class="container mt-5">
    <div class="row g-4">
         <div class="col-md-4">
            <div class="card custom-card text-white border-0 h-100">
                <img src="{{ asset('assets/img/imagen4.jpg') }}" class="card-img">
                <div class="card-img-overlay overlay-centrado">
                    <h3 class="card-title text-center">CDS</h3>
                    <a href="#" class="stretched-link"></a> 
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card custom-card text-white border-0 h-100">
                <img src="{{ asset('assets/img/imagen5.jpg') }}" class="card-img">
                <div class="card-img-overlay overlay-centrado">
                    <h3 class="card-title text-center">VINILOS</h3>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card custom-card text-white border-0 h-100">
                <img src="{{ asset('assets/img/imagen6.jpg') }}" class="card-img">
                <div class="card-img-overlay overlay-centrado">
                    <h3 class="card-title text-center">REPRODUCTORES</h3>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection