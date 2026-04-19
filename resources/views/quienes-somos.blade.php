@extends('plantilla')

@section('contenido')

<div class="card text-bg-dark border-0">

    <img src="{{ asset('assets/img/imagen1.jpg') }}" class="card-img quienes-img">

    <div class="card-img-overlay d-flex justify-content-center align-items-center">
        <h1 class="titulo-quienes">¿QUIÉNES SOMOS?</h1>
    </div>

</div>

<div class="quienes-somos">
<div class="container mt-5">

    <div class="row g-4 justify-content-center">

        <div class="col-md-4">
            <div class="card h-100">
                <img src="{{ asset('assets/img/imagen3.jpg') }}" class="card-img-top">
                <div class="card-body">
                    <p class="card-text">
                        Persona 1
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100">
                <img src="{{ asset('assets/img/imagen2.jpg') }}" class="card-img-top">
                <div class="card-body">
                    <p class="card-text">
                        Persona 2
                    </p>
                </div>
            </div>
        </div>

    </div>

  </div>
</div>

<div class="container mt-5 texto-quienes">
  <p>
    The B-Side nació para quienes sienten la música de verdad. Creemos que escuchar un disco no es solo poner play: es vivir una experiencia.
    Por eso reunimos vinilos, CDs y reproductores para fanáticos, coleccionistas y curiosos que buscan algo distinto.
    Porque la mejor música no siempre está del lado A.
  </p>
</div>

@endsection