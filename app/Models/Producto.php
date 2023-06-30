<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'marca',
        'stock',
        'activo',
        'id_estado',
        'codigo',
        'precio',
        'ganancia',
        'tamaño_o_tipo',
        'fecha_de_expiracion',
        'ubicacion',
        'tipo_de_meditas',
        'id_categoria',
    ];
}
