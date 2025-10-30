<?php

namespace App\Services;

use App\Interfaces\NotaInterface;
use App\Models\Api\V1\NotaModel;

class NotaService implements NotaInterface
{
    /**
     * Obtener una lista de notas.
     */
    public function obtenerNotas(): object
    {
        return NotaModel::all();
    }
}