<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->firstName(),
            'preco' => fake()->randomFloat(2,0,1000000),
            'estoque' => fake()->randomNumber(3),
            'imagem_url' => 'produtos/1.jpeg',
            'categoria' => fake()->firstName(),
            'descricao' => fake()->text()
        ];
    }
}
