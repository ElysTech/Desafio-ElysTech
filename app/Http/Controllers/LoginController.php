<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function auth(Request $request) {

        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credenciais)) {
            $request->session()->regenerate();

            return Response::response()->json('Autenticado');
        }

        return Response::response()->json('Erro de autenticação');
    }
}
