<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    // Especificar la tabla si el nombre no es plural de la clase
    protected $table = 'registros';

    // Los atributos que son asignables en masa
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'password',
    ];

    // Si deseas ocultar ciertos atributos al convertir el modelo a un array o JSON
    protected $hidden = [
        'password',
    ];
}