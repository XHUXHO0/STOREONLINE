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
        ]);
        Categoria::create([
            'nombre' => 'JAVON POLVO',
            'descripcion' => '',
        ]);
        Categoria::create([
            'nombre' => 'TRASTES',
            'descripcion' => '',
        ]);
        Categoria::create([
            'nombre' => 'JARRAS',
            'descripcion' => '',
        ]);
        Categoria::create([
            'nombre' => 'SHAMPOO',
            'descripcion' => '',
        ]);
        Categoria::create([
            'nombre' => 'AROMAS',
            'descripcion' => '',
        ]);
        Categoria::create([
            'nombre' => 'DETERGENTES',
            'descripcion' => '',
        ]);
        Categoria::create([
            'nombre' => 'MUEBLES O ESTANTES',
            'descripcion' => '',
        ]);
        Categoria::create([
            'nombre' => 'TAMBOS',
            'descripcion' => '',
        ]);
        Categoria::create([
            'nombre' => 'TOPERS',
            'descripcion' => '',
        ]);
        Categoria::create([
            'nombre' => 'ESCOBAS',
            'descripcion' => '',
        ]);
        Categoria::create([
            'nombre' => 'ESTOPAS',
            'descripcion' => '',
        ]);
        Categoria::create([
            'nombre' => 'TRAPOS',
            'descripcion' => '',
        ]);
        Categoria::create([
            'nombre' => 'ESCOBETAS',
            'descripcion' => '',
        ]);
        Categoria::create([
            'nombre' => 'PASTILLAS',
            'descripcion' => '',
        ]);
        Categoria::create([
            'nombre' => 'ROCIADORES',
            'descripcion' => '',
        ]);
    }
}
