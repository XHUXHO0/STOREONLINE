<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nombre' => 'jesus',
            'apellido_paterno' => 'Sanchez',
            'apellido_materno' => 'Sarmiento',
            'id_sucursal' => '1',
            'email' => 'xhuxho.emprende@gmail.com',
            'password' => bcrypt('Jss123..'),
        ]);
        User::create([
            'nombre' => 'jesus de jose',
            'apellido_paterno' => 'Sanchez',
            'apellido_materno' => 'Dominguez',
            'id_sucursal' => '1',
            'email' => 'jdjsondom40@gmail.com',
            'password' => bcrypt('12398752'),
        ]);
        User::create([
            'nombre' => 'Araceli',
            'apellido_paterno' => 'Sarmiento',
            'apellido_materno' => 'Miranda',
            'id_sucursal' => '1',
            'email' => 'arasarmir40@gmail.com',
            'password' => bcrypt('12398752'),
        ]);
    }
}
