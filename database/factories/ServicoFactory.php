<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Servico>
 */
class ServicoFactory extends Factory
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
            'nome' => fake()->firstName(),
            'preco' => fake()->randomFloat(2,0,1000000),
            'imagem_url' => 'servicos/1.jpeg',
            'categoria' => fake()->firstName(),
            'descricao' => fake()->text()
        ];
    }
}
