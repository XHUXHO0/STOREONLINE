<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'nombre',
        'apellidos',
        'direccion',
        'numero_telefonico',
        'email',
        'id_sucursal',
        'uri_foto',
    ];
}
