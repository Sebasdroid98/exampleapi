<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface NotaServiceImplement
{
    public function obtenerNotas(): object;
    public function store(Request $request): object;
}