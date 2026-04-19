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