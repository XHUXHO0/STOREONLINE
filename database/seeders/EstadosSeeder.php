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
            'id_sucursal' => '1',
        ]);
        Estado::create([
            'nombre' => 'EN PROMOCION',
            'descripcion' => '',
            'id_sucursal' => '1',
        ]);
        Estado::create([
            'nombre' => 'EN DESCUENTO',
            'descripcion' => '',
            'id_sucursal' => '1',
        ]);
        Estado::create([
            'nombre' => 'EN PEDIDO',
            'descripcion' => '',
            'id_sucursal' => '1',
        ]);
        Estado::create([
            'nombre' => 'PEDIDO ESPECIAL',
            'descripcion' => '',
            'id_sucursal' => '1',
        ]);
        Estado::create([
            'nombre' => 'SE VENDE RAPIDO',
            'descripcion' => '',
            'id_sucursal' => '1',
        ]);
        Estado::create([
            'nombre' => 'SE VENDE DESPACIO',
            'descripcion' => '',
            'id_sucursal' => '1',
        ]);
        Estado::create([
            'nombre' => 'REGALO',
            'descripcion' => '',
            'id_sucursal' => '1',
        ]);
        Estado::create([
            'nombre' => 'PARA USO PERSONAL',
            'descripcion' => '',
            'id_sucursal' => '1',
        ]);
    }
}
