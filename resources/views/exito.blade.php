@extends('plantilla')

@section('contenido')
<div class="text-center mt-5">
    <div class="alert alert-success">
        Hola <strong>{{ $nombre }}</strong>, qué bueno recibir tu mensaje.💚  
        Nos contactaremos al correo <strong>{{ $email }}</strong>.
    </div>
</div>
@endsection