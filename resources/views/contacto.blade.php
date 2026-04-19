@extends('plantilla')
@section('contenido')

<div class="contacto">
    <form action="{{ url('/contacto') }}" method="POST">
        @csrf
        <h2>Contacto</h2>

        <div class="input-group">

            <label for="name">Nombre</label>
            <input type="text" id="name" placeholder="Nombre">

            <label for="phone">Telefono</label>
            <input type="text" id="phone" placeholder="Telefono">

            <label for="email">Email</label>
            <input type="text" id="email" placeholder="Email">

            <label for="message">Mensaje</label>
            <textarea id="message" rows="5" placeholder="Mensaje"></textarea>

            <div class="form-text">
                <a href="#">Política de privacidad</a>
                <a href="#">Términos y condiciones</a>
            </div>

            <input class="btn" type="submit" value="Enviar">

        </div>
    </form>
</div>

@endsection