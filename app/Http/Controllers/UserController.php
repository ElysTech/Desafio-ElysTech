<?php

namespace App\Http\Controllers;

namespace \App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class User extends Controller
{
    public String createcsrf_token(){
       return Response::response()->json(csrf_token());
    };
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
            'role' => 'required'
        ]);

        $findUser = User::find($request->email);

        if($findUser) return response()->json("Email inválido. Tente outro", 400);

        $user = $this->user::create([
            'name': $request->get('name'),
            'email': $request->get('email'),
            'password': $request->get('password')
            'role': $request->get('role')
        ]);

        return response()->json($user, 201);
    }

}
