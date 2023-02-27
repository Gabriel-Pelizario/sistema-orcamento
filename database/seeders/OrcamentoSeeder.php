<?php

namespace Database\Seeders;

use App\Models\Orcamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrcamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //importar o orçamento
        Orcamento::factory(10)->create();


    }
}
