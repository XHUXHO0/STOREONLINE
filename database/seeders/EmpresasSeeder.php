<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Seeder;

class EmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Empresa::create([
            'title' => 'JARCERIA',
            'direccion' => '19 Reforma Santa Ana Xalmimilulco, Huejotzingo, Puebla',
            'razon_social' => '',
        ]);
    }
}
