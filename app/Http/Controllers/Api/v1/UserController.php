<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\v1\UserResource;
use App\Models\User;
use App\Traits\Api\v1\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    use HttpResponses;

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
            // return response()->json(['error' => [$validator->errors()]], 422);   ##  retorno simples
            return $this->error('Invalid Data', 422, $validator->errors());   ## retorno usando Trait HttpResponses
        }
 
        $created = User::create($validator->validated());
 
        if($created) {
            return $this->response('User created', 201, new UserResource($created));   ## retorno usando Trait HttpResponses
            // return response()->json([
            //     'message' => 'User created',        ##  retorno simples
            //     'data' => new UserResource($created),
            // ], 201);
        }
 
        // return response()->json(['error' => 'Invoice not created'], 400);    ##  retorno simples
        return $this->error('User not created', 400);
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
    public function update(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'nullable|string|min:4|max:50',
            'email' => 'nullable|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6|max:50',
            'type' => 'nullable|string|max:1|in:' . implode(',', array_keys(User::$tipos_usuarios)),
            'status' => 'required|numeric|max:1',
        ]);

        if($validator->fails()) {
            return $this->error('Validation failed', 422, $validator->errors());
        }

        $validated = $validator->validated();

        $updated = $user->update([
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            'type' => $validated['type'],
            'status' => $validated['status'],
        ]);

        if($updated) {
            return $this->response('User updated', 200, new UserResource($user));
        }

        return $this->error('User not updated', 400);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
