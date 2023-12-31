<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'id_usuario', 
        'id_sucursal', 
        'monto', 
        'ganancia', 
        'items', 
        'id_estatus_venta', 
        'codigo_referencia',
    ];
}
