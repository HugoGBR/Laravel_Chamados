<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Cria um usuário inicial na tabela `users`.
        User::create([
            'name' => 'Admin User', // Nome do usuário
            'email' => 'admin@example.com', // Email do usuário
            'password' => bcrypt('password'), // Senha criptografada
        ]);
    }
}
