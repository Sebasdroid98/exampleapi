<?php

namespace App\Models\Api\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    /** @use HasFactory<\Database\Factories\Api\V1\NotaFactory> */
    use HasFactory;

    protected $table = 'notas';
    protected $fillable = ['titulo', 'contenido', 'etiquetas', 'color'];
}
