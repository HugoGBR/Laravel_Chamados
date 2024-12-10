<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        Usuario::create([
            'nome' => 'Administrador',
            'email' => 'admin@example.com',
            'telefone' => '123456789',
            'tipo' => 'administrador',
            'senha' => bcrypt('password'), // Use a senha que desejar
        ]);
    }
}
