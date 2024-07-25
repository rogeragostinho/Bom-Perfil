<?php

namespace Database\Seeders;

use App\Models\ProdutoPedido;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoPedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ProdutoPedido::factory(40)->create();
    }
}
