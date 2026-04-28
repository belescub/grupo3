<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function procesar(Request $request)
    {
        $email = $request->input('email');

        return view('exito-login', [
            'email' => $email
        ]);
    }
}

