<?php

namespace App\Http\Controllers\Api;

use App\Models\Jogoteca;
use Illuminate\Http\Request;
use OpenApi\Annotations\PathItem;
use OpenApi\Attributes\PathItem as AttributesPathItem;

class JogotecaController
{
    public function index()
    {
        return Jogoteca::all();
    }

    public function show(int $jogoteca)
    {
        $jogotecaModel = Jogoteca::with('producers')->find($jogoteca);

        if ($jogotecaModel == null)
        {
            return response()->json(["Serie não encontrada"], 404);
        }

        return $jogotecaModel;
    }

    public function store(Request $request)
    {
        return response()->json(Jogoteca::create($request->all()), 201);
    }

    public function update(int $jogoteca, Request $request)
    {
        Jogoteca::where('id', $jogoteca)->update($request->all());

        return ['Jogo atualizado com sucesso'];
    }

    public function destroy(int $jogoteca)
    {
        Jogoteca::destroy($jogoteca);

        return response()->noContent();
    }
}
