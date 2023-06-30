<?php

namespace Database\Seeders;

use App\Models\Estado_venta;
use Illuminate\Database\Seeder;

class Estados_ventasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Estado_venta::create([
            'nombre' => 'COMPLETO',
            'descripcion' => '',
        ]);
        Estado_venta::create([
            'nombre' => 'PROCESO',
            'descripcion' => '',
        ]);
        Estado_venta::create([
            'nombre' => 'CANCELADO',
            'descripcion' => '',
        ]);
    }
}
