<?php

namespace Database\Factories;

use App\Models\Orcamento;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //dados ficticios
            'nome' => $this->faker->name,
            'telefone' => $this->faker->phoneNumber,
            'celular' => $this->faker->phoneNumber,
            'dt_Nascimento' => $this->faker->date,
            'cpf' => $this->faker->randomDigit,
            'rg' => $this->faker->randomDigit,
            'tp_atendimento' => $this->faker->word, 
            'email' => $this->faker->safeEmail,
            'cep' => $this->faker->postcode,
            'rua' => $this->faker->word,
            'bairro' => $this->faker->word,
            'ibge' => $this->faker->randomDigit,
            'cidade' => $this->faker->city,
            'uf' => $this->faker->word,
            'nr' => $this->faker->randomDigit(5),
            'id_user' => User::pluck('id')->random(),
            'id_orcamento' => Orcamento::pluck('id')->random()

            // pluck('id') serve para fazer a ligação entre as tabelas
            // random() serve para fazer os dados aleatórios
            // também foi necessário importar as tabelas User e ORcamento para as ligações
        ];
    }
}
