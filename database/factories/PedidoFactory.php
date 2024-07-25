<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedido>
 */
class PedidoFactory extends Factory
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
            'data' => fake()->date(),
            'estado' => 'pendente',
            'total' => fake()->randomNumber(7),
            'cliente_nome' => fake()->firstName(),
            'cliente_email' => fake()->email(),
            'cliente_endereco' => 'luanda/mutamba',
            'cliente_telefone' => fake()->randomNumber(9),
        ];
    }
}
