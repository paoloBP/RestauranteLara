<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'nome' => 'Hamburguer',
        ]);

        Categoria::create([
            'nome' => 'Xis',
        ]);
        Categoria::create([
            'nome' => 'Alaminuta',
        ]);
        Categoria::create([
            'nome' => 'Bebidas',
        ]);

        Categoria::create([
            'nome' => 'Porção',
        ]);
    }
}
