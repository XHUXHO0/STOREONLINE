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
            'email' => 'xhuxho.emprende@gmail.com',
            'password' => bcrypt('Jss123..'),
        ]);
    }
}
