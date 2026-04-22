<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('TheB-Side'); //pagina princial
});

Route::get('/contacto', function () {
    return view('contacto'); 
});

Route::post('/contacto', [ContactoController::class, 'procesar']);

Route::get('/terminosdeuso', function () {
    return view('terminosdeuso'); 
});

Route::get('/quienessomos', function () {
    return view('quienes-somos'); 
});

Route::get('/productos', function () { 
    return view('productos'); 
});

Route::get('/carrito', function () { 
    return view('en-construccion'); 
});


Route::get('/login', function () { 
    return view('login'); 
});


Route::get('/registro', function () { 
    return view('registro'); 
});