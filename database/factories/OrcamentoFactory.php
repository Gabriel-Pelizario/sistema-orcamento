<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orcamento>
 */
class OrcamentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //inserir dados ficticios no banco
            'tp_orcamento' => $this->faker->word,
            'tp_pagamento' => $this->faker->randomDigit(3),
            'qtde_parcela' => $this->faker->randomDigit(3),
            'valor' => $this->faker->randomNumber(4),
            'validade' => $this->faker->randomNumber(1),
            'historico' => $this->faker->word,
            'orcamento' => $this->faker->word

        ];
    }
}
