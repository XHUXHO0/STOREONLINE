<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nombre' => 'Sin registro',
            'apellidos' => 'General',
            'direccion' => 'desconocida',
            'numero_telefonico' => '0000000000',
            'email' => 'desconocido@domini.com',
            'id_sucursal' => '1',
            'uri_foto' => 'https://i.ibb.co/YcFFGyf/fotos-perfil-whatsapp-16-1.png',
        ]);
    }
}
