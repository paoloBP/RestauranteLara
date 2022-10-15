<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'nome' => 'José Fagundes',
            'situacao' => 'ativo',
            'celular' => '5432321231',
            'cpf' => '123456789900-00',
            'dt_nascimento' => '1990/08/12',
        ]);
    }
}
