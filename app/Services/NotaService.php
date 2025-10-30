<?php

namespace App\Services;

use App\Http\Resources\V1\NotaResource;
use App\Interfaces\NotaServiceImplement;
use App\Models\Api\V1\NotaModel;
use Illuminate\Http\Request;

class NotaService implements NotaServiceImplement
{
    /**
     * Obtener una lista de notas.
     */
    public function obtenerNotas(): object
    {
        return NotaResource::collection(NotaModel::all());
    }

    public function store(Request $request): object
    {
        return new NotaResource(NotaModel::create($request->all()));
    }
}