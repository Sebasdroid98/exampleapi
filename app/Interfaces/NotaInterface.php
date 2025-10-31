<?php

namespace App\Interfaces;

use App\Http\Requests\V1\NotaStoreRequest;
use App\Http\Resources\V1\NotaCollection;
use App\Http\Resources\V1\NotaResource;

interface NotaInterface
{
    public function obtenerNotas(): NotaCollection;
    public function registrarNota(NotaStoreRequest $request): NotaResource;
    public function obtenerNotaPorId(int $id): NotaResource;
}