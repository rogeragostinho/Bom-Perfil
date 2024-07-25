<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'tipo' => 'superadmin',
            'email' => 'test@example.com',
            'password' => 'test'
        ]);

        User::factory()->create([
            'name' => 'Test',
            'tipo' => 'admin',
            'email' => 'test@egmail.com',
            'password' => 'test'
        ]);

        User::factory()->create([
            'name' => 'User',
            'tipo' => 'admin',
            'email' => 'test@user.com',
            'password' => 'test'
        ]);

        $this->call([
            PedidoSeeder::class,
            ProdutoSeeder::class,
            ProdutoPedidoSeeder::class,
            ServicoSeeder::class,
            ServicoPedidoSeeder::class
        ]);
    }
}
