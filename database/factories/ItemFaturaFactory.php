<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ItemFatura>
 */
class ItemFaturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fatura_id' => 1,
            'produto_id' => 1,
            'preco' => fake()->randomFloat(2, 0, 1000000),
            'quantidade' => fake()->randomNumber(3),
        ];
    }
}
