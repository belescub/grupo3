@extends('plantilla')
@section('contenido')

<div class="contacto">
    <form action="{{ url('/contacto') }}" method="POST">
        @csrf
        <h2>Contacto</h2>

        <div class="input-group">

            <label for="name">Nombre</label>
            <input type="text" id="name" name="nombre" placeholder="Nombre">

            <label for="phone">Teléfono</label>
            <input type="text" id="phone" name="telefono" placeholder="Telefono">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email">

            <label for="message">Mensaje</label>
            <textarea id="message" name="mensaje" rows="5" placeholder="Mensaje"></textarea>

            <div class="form-text">
                <a href="/privacidad">Política de privacidad</a>
                <a href="/terminosdeuso">Términos y condiciones</a>
            </div>

            <input class="btn" type="submit" value="Enviar">

        </div>
    </form>
</div>

@endsection