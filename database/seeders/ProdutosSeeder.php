<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create([
            'nome' => 'Xis Salada',
            'descricao' => 'Pão, hambúrguer, ovo, queijo, milho, ervilha, tomate, alface, maionese e catchup.',
            'preco' => '20',
            'estoque' => '5',
            'slug' => '',
            'imagem' => '',
            'id_user' => '1',
            'id_categoria' => '2',
        ]);

        Produto::create([
            'nome' => 'Xis Bacon',
            'descricao' => 'Pão, hambúrguer, ovo, queijo, milho, ervilha, tomate, bacon, maionese e catchup.',
            'preco' => '23',
            'estoque' => '4',
            'slug' => '',
            'imagem' => '',
            'id_user' => '1',
            'id_categoria' => '2',
        ]);

        Produto::create([
            'nome' => 'Á la minuta bife de gado',
            'descricao' => 'Arroz, feijão, ovo, batata frita e salada.',
            'preco' => '30',
            'estoque' => '4',
            'slug' => '',
            'imagem' => '',
            'id_user' => '1',
            'id_categoria' => '3',
        ]);

        Produto::create([
            'nome' => 'Á la minuta filé de frango',
            'descricao' => 'Arroz, feijão, ovo, batata frita e salada.',
            'preco' => '30',
            'estoque' => '4',
            'slug' => '',
            'imagem' => '',
            'id_user' => '1',
            'id_categoria' => '3',
        ]);

        Produto::create([
            'nome' => 'Hamburguer Macanudo',
            'descricao' => 'Pão Sovado com Gergelim Preto, Hambúrguer de Costela 180G, Queijo Mussarela, Molho de Mostarda e Mel, Cebola Crispy,, Rúcula, Maionese Taverna, Acompanha Anéis de Cebola.',
            'preco' => '33',
            'estoque' => '5',
            'slug' => '',
            'imagem' => '',
            'id_user' => '1',
            'id_categoria' => '1',
        ]);

        Produto::create([
            'nome' => 'Hamburguer Lá Beca',
            'descricao' => 'Pão Cervejinha, Hambúrguer de Cordeiro 180G, Queijo Mussarela, Molho de Iogurte com Hortelã, Rúcula, Maionese Taverna, Acompanha Fritas.',
            'preco' => '34',
            'estoque' => '5',
            'slug' => '',
            'imagem' => '',
            'id_user' => '1',
            'id_categoria' => '1',
        ]);

        Produto::create([
            'nome' => 'Coca Cola',
            'descricao' => '350 ml',
            'preco' => '5',
            'estoque' => '5',
            'slug' => '',
            'imagem' => '',
            'id_user' => '1',
            'id_categoria' => '4',
        ]);

        Produto::create([
            'nome' => 'Coca Cola Zero',
            'descricao' => '350 ml',
            'preco' => '5',
            'estoque' => '5',
            'slug' => '',
            'imagem' => '',
            'id_user' => '1',
            'id_categoria' => '4',
        ]);
    }
}
