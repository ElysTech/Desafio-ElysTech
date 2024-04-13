<?php

namespace App\Http\Controllers;

use App\Models\Example;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function __construct(private readonly Example $example)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->example::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // $request->only('nome', 'altura'); // pega somente propriedades necessárias
        // $request->filled('nome'); // pega propriedades preenchidas
        $request = $request->all(); // pega tudo no corpo da requisição

        $example = $this->example::create($request);

        return response()->json($example);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $example = $this->example::find($id);

        if (!$example) return response()->json("Não foi encontrado exemplo do id $id", 404);

        return response()->json($example);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $example = $this->example::find($id);

        if (!$example) return response()->json("Não foi encontrado exemplo do id $id", 404);

        $example->update($request->all());

        return response()->json($example, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $example = $this->example::find($id);

        if (!$example) return response()->json("Não foi encontrado exemplo do id $id", 404);

        $example->update(['isActive' => false]);
        return response()->json(['message' => 'Deletado com sucesso!']);
    }
}
