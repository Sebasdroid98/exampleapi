<?php

namespace App\Services;

use App\Http\Requests\V1\NotaStoreRequest;
use App\Http\Resources\V1\NotaCollection;
use App\Http\Resources\V1\NotaResource;
use App\Interfaces\NotaInterface;
use App\Models\Api\V1\Nota;

class NotaService implements NotaInterface
{
    /**
     * Obtener una lista de notas.
     * @param void
     * @return object<NotaCollection>
     */
    public function obtenerNotas(): NotaCollection
    {
        return new NotaCollection(Nota::paginate(10));
    }

    /**
     * Registrar una nueva nota.
     * @param NotaStoreRequest $request
     * @return object<NotaResource>
     */
    public function registrarNota(NotaStoreRequest $request): NotaResource
    {
        return new NotaResource(Nota::create($request->all())); 
    }

    /**
     * Obtener una nota por su ID.
     * @param int $id
     * @return object<NotaResource>
     */
    public function obtenerNotaPorId(int $id): NotaResource
    {
        return new NotaResource(Nota::find($id));
    }
}