@extends('plantilla')
@section('contenido')
<div class="text-center mt-5">
    <div class="alert alert-success">
        Bienvenido a The B-Side!
        Has iniciado sesión con el correo <strong>{{ $email }}</strong> correctamente.
    </div>
</div>
@endsection