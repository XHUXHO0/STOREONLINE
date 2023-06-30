<?php

namespace App\Models;

use App\Models\Estado;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'marca',
        'titulo',
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

    public function categoria()
    {
        return $this->hasOne(Categoria::class, 'id', 'id_categoria');
    }

    public function estado()
    {
        return $this->hasOne(Estado::class, 'id', 'id_estado');
    }
}
