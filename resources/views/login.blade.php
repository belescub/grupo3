@extends('plantilla')
@section('contenido')
<div class="login d-flex justify-content-center align-items-center login">
     <div class="wrapper">
        <form action="">
            <h1>Iniciar sesión </h1>
            <div class="input-box">
                <input type="text" placeholder="Usuario" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Contraseña" required>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox"> Recordarme</label>
                <a href="#">¿Olvidaste tu contraseña?</a>
            </div>

            <button type="submit"class="btn">Ingresar</button>

            <div class="register-link">
                <p>¿No tienes una cuenta? <a href="#">Registrarse</a></p>
            </div>
        </form>
     </div>
@endsection