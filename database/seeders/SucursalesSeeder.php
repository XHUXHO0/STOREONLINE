<?php

namespace Database\Seeders;

use App\Models\Sucursal;
use Illuminate\Database\Seeder;

class SucursalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sucursal::create([
            'title' => 'Matriz',
            'direccion' => '19 Reforma Santa Ana Xalmimilulco, Huejotzingo, Puebla',
            'descripccion' => 'productdos de jerceria',
            'id_empresa' => '1',
        ]);
    }
}
