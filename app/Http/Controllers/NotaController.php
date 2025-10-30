<?php

namespace App\Http\Controllers;

use App\Models\Api\V1\NotaModel;
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
        return $this->notaService->obtenerNotas();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NotaModel $notaModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NotaModel $notaModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NotaModel $notaModel)
    {
        //
    }
}
