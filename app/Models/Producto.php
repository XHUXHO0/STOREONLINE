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
        'id_empresa',
        'id_sucursal',
        'id_vendedor',
        'id_categoria',
        'uri_foto',
        'marca',
        'titulo',
        'stock',
        'id_estado',
        'activo',
        'codigo',
        'precio',
        'ganancia',
        'ubicacion',
        'tamano_o_tipo',
        'fecha_de_expiracion',
        'tipo_de_meditas'
    ];

    public function sucursal()
    {
        return $this->hasOne(sucursal::class, 'id', 'id_sucursal');
    }

    public function vendedor()
    {
        return $this->hasOne(User::class, 'id', 'id_vendedor');
    }

    public function categoria()
    {
        return $this->hasOne(Categoria::class, 'id', 'id_categoria');
    }
    public function estado()
    {
        return $this->hasOne(Estado::class, 'id', 'id_estado');
    }
}
