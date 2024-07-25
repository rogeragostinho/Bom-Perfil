<?php

namespace Database\Factories;

use App\Models\Pedido;
use App\Models\Servico;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServicoPedido>
 */
class ServicoPedidoFactory extends Factory
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
            'servico_id' => Servico::pluck('id')->random(),
        ];
    }
}
