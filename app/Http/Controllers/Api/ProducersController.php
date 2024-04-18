<?php

namespace App\Http\Controllers\Api;

use App\Models\Producers;
use Illuminate\Http\Request;

class ProducersController
{
    public function index(Request $request)
    {
        $query = Producers::query();

        if ($request->has('name'))
        {
            return $query->whereName($request->name)->get();
        }

        return $query->paginate(5);
    }

    public function show(int $producer)
    {
        $producerModel = Producers::with('jogoteca')->find($producer);

        if ($producerModel == null)
        {
            return response()->json(['Produtor não encontrado'], 404);
        }

        return $producerModel;
    }

    public function store(Request $request)
    {
        return response()->json(Producers::create($request->all()), 201);
    }

    public function update(int $producer, Request $request)
    {
        Producers::where('id', $producer)->update($request->all());

        return ["Série atulizada com sucesso"];
    }

    public function destroy(int $producer)
    {
        Producers::destroy($producer);

        return response()->noContent();
    }
}
