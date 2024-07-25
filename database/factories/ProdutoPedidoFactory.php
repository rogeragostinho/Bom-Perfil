<?php

namespace Database\Factories;

use App\Models\Pedido;
use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProdutoPedido>
 */
class ProdutoPedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'pedido_id' => Pedido::pluck('id')->random(),
            'produto_id' => Produto::pluck('id')->random(),
            'quantidade' => fake()->randomNumber(2)
        ];
    }
}
