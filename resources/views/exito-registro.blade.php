@extends('plantilla')
@section('contenido')
<div class="text-center mt-5">
    <div class="alert alert-success">
        ¡Cuenta creada con éxito! <br>
        Bienvenido <strong>{{ $nombre }}</strong> a <strong>The B-Side</strong><br>
        Te registraste correctamente con el correo <strong>{{ $email }}</strong>
    </div>
</div>
@endsection