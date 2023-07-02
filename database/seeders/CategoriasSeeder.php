<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'nombre' => 'JAVON LIQUIDO',
            'descripcion' => '',
            'id_sucursal' => '1',
        ]);
        Categoria::create([
            'nombre' => 'JAVON POLVO',
            'descripcion' => '',
            'id_sucursal' => '1',
        ]);
        Categoria::create([
            'nombre' => 'TRASTES',
            'descripcion' => '',
            'id_sucursal' => '1',
        ]);
        Categoria::create([
            'nombre' => 'JARRAS',
            'descripcion' => '',
            'id_sucursal' => '1',
        ]);
        Categoria::create([
            'nombre' => 'SHAMPOO',
            'descripcion' => '',
            'id_sucursal' => '1',
        ]);
        Categoria::create([
            'nombre' => 'AROMAS',
            'descripcion' => '',
            'id_sucursal' => '1',
        ]);
        Categoria::create([
            'nombre' => 'DETERGENTES',
            'descripcion' => '',
            'id_sucursal' => '1',
        ]);
        Categoria::create([
            'nombre' => 'MUEBLES O ESTANTES',
            'descripcion' => '',
            'id_sucursal' => '1',
        ]);
        Categoria::create([
            'nombre' => 'TAMBOS',
            'descripcion' => '',
            'id_sucursal' => '1',
        ]);
        Categoria::create([
            'nombre' => 'TOPERS',
            'descripcion' => '',
            'id_sucursal' => '1',
        ]);
        Categoria::create([
            'nombre' => 'ESCOBAS',
            'descripcion' => '',
            'id_sucursal' => '1',
        ]);
        Categoria::create([
            'nombre' => 'ESTOPAS',
            'descripcion' => '',
            'id_sucursal' => '1',
        ]);
        Categoria::create([
            'nombre' => 'TRAPOS',
            'descripcion' => '',
            'id_sucursal' => '1',
        ]);
        Categoria::create([
            'nombre' => 'ESCOBETAS',
            'descripcion' => '',
            'id_sucursal' => '1',
        ]);
        Categoria::create([
            'nombre' => 'PASTILLAS',
            'descripcion' => '',
            'id_sucursal' => '1',
        ]);
        Categoria::create([
            'nombre' => 'ROCIADORES',
            'descripcion' => '',
            'id_sucursal' => '1',
        ]);
    }
}
