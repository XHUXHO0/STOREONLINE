<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Seeder;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Estado::create([
            'nombre' => 'EN VENTA',
            'descripcion' => '',
        ]);
        Estado::create([
            'nombre' => 'EN PROMOCION',
            'descripcion' => '',
        ]);
        Estado::create([
            'nombre' => 'EN DESCUENTO',
            'descripcion' => '',
        ]);
        Estado::create([
            'nombre' => 'EN PEDIDO',
            'descripcion' => '',
        ]);
        Estado::create([
            'nombre' => 'PEDIDO ESPECIAL',
            'descripcion' => '',
        ]);
        Estado::create([
            'nombre' => 'SE VENDE RAPIDO',
            'descripcion' => '',
        ]);
        Estado::create([
            'nombre' => 'SE VENDE DESPACIO',
            'descripcion' => '',
        ]);
        Estado::create([
            'nombre' => 'REGALO',
            'descripcion' => '',
        ]);
        Estado::create([
            'nombre' => 'PARA USO PERSONAL',
            'descripcion' => '',
        ]);
    }
}
