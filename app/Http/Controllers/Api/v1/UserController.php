<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\v1\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return UserResource::collection(User::all());    ## Utilizando Collections para manipular a saída dos dados da API
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'nullable|string|min:4|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:50',
            'type' => 'required|string|max:1|in:' . implode(',', array_keys(User::$tipos_usuarios)),
            'status' => 'required|numeric|max:1',
        ]);

        if($validator->fails()) {
           return response()->json(['error' => [$validator->errors()]], 422);
        }

        $created = User::create($validator->validated());

        if($created) {
            return response()->json([
               'message' => 'User created',
               'data' => new UserResource($created),
            ], 201);
        }

        return response()->json(['error' => 'User not created'], 400);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}