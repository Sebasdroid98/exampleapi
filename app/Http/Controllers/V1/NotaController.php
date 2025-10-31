<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\NotaStoreRequest;
use App\Models\Api\V1\Nota;
use App\Services\NotaService;
use Illuminate\Http\Request;

class NotaController extends Controller
{

    public function __construct(protected NotaService $notaService)
    {
        //
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->notaService->obtenerNotas()
            ->additional([
                'message' => 'Notas obtenidas con éxito',
                'status' => 200,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NotaStoreRequest $request)
    {
        return $this->notaService->registrarNota($request)
            ->additional([
                'message' => 'Nota registrada con éxito',
                'status' => 200,
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return $this->notaService->obtenerNotaPorId($id)
            ->additional([
                'message' => 'Nota obtenida con éxito',
                'status' => 200,
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nota $nota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nota $nota)
    {
        //
    }
}
