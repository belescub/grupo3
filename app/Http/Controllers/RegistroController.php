<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function procesar(Request $request)
    {
        $nombre = $request->input('nombre');
        $email = $request->input('email');

        return view('exito-registro', [
            'nombre' => $nombre,
            'email' => $email
        ]);
    }
    
}
