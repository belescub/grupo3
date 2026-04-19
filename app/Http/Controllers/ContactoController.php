<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function procesar (Request $request) {
        $nombre = $request->input('nombre'); 
        $email = $request->input('email'); 
        $mensaje = $request->input('mensaje');

        return view('exito', [ //manda los datos a la vista
            'nombre' => $nombre,
            'email' => $email
        ]);
    }
}
