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
            'imagem' => 'https://guerreirolanches.com.br/wp-content/uploads/2017/08/xis_banner_1.jpg',
            'id_user' => '1',
            'id_categoria' => '2',
        ]);

        Produto::create([
            'nome' => 'Xis Bacon',
            'descricao' => 'Pão, hambúrguer, ovo, queijo, milho, ervilha, tomate, bacon, maionese e catchup.',
            'preco' => '23',
            'imagem' => 'https://xgauchocasanova.com.br/wp-content/uploads/2021/12/X-Bacon.jpg',
            'id_user' => '1',
            'id_categoria' => '2',
        ]);

        Produto::create([
            'nome' => 'Á la minuta bife de gado',
            'descricao' => 'Arroz, feijão, ovo, batata frita e salada.',
            'preco' => '30',
            'imagem' => 'https://tendadoumbu.com.br/wp-content/uploads/2017/08/Card-A-la-minuta-1080x675.png',
            'id_user' => '1',
            'id_categoria' => '3',
        ]);

        Produto::create([
            'nome' => 'Á la minuta filé de frango',
            'descricao' => 'Arroz, feijão, ovo, batata frita e salada.',
            'preco' => '30',
            'imagem' => 'https://www.noronhalanches.com.br/images/cardapio/alaminuta/frango.jpg',
            'id_user' => '1',
            'id_categoria' => '3',
        ]);

        Produto::create([
            'nome' => 'Hamburguer Macanudo',
            'descricao' => 'Pão Sovado com Gergelim Preto, Hambúrguer de Costela 180G, Queijo Mussarela, Molho de Mostarda e Mel, Cebola Crispy,, Rúcula, Maionese Taverna, Acompanha Anéis de Cebola.',
            'preco' => '33',
            'imagem' => 'https://app.numerama.com.br/uploaded/26341638000180_files/produtos/619647/LGHVDTDGXPWDAFA64QLM95F3NVC8C1HX3ZCMALS25OBZ7W6LDRCJOCWTMKPRS8YUQ9KIZV.jpeg',
            'id_user' => '1',
            'id_categoria' => '1',
        ]);

        Produto::create([
            'nome' => 'Hamburguer Lá Beca',
            'descricao' => 'Pão Cervejinha, Hambúrguer de Cordeiro 180G, Queijo Mussarela, Molho de Iogurte com Hortelã, Rúcula, Maionese Taverna, Acompanha Fritas.',
            'preco' => '34',
            'imagem' => 'https://app.numerama.com.br/uploaded/26341638000180_files/produtos/619588/FYWKMKKTMMDN7OW91DSOCGYTZGH3OPVRCW14VLD2MI59JVGM7CNY9NKWUPTYAQSPAQ5J2D.jpeg',
            'id_user' => '1',
            'id_categoria' => '1',
        ]);

        Produto::create([
            'nome' => 'Coca Cola',
            'descricao' => '350 ml',
            'preco' => '5',
            'imagem' => 'https://static-images.ifood.com.br/image/upload/t_medium/pratos/e9e029dc-e4cc-4a37-af8c-884c3950b41b/202205131049_2KW1_i.jpg',
            'id_user' => '1',
            'id_categoria' => '4',
        ]);

        Produto::create([
            'nome' => 'Coca Cola Zero',
            'descricao' => '350 ml',
            'preco' => '5',
            'imagem' => 'https://static-images.ifood.com.br/image/upload/t_medium/pratos/e9e029dc-e4cc-4a37-af8c-884c3950b41b/202205131049_M78A_i.jpg',
            'id_user' => '1',
            'id_categoria' => '4',
        ]);

        Produto::create([
            'nome' => 'Anéis de Cebola',
            'descricao' => 'Cebola empanada frita',
            'preco' => '22',
            'imagem' => 'https://app.numerama.com.br/uploaded/26341638000180_files/produtos/619591/WW5LF8PXOWBMBM4ELKQPDZV1DFP0QPR9JGWXFGCOUF749SNWDEEJUSCSV7UMAJD6XUVHDU.jpeg',
            'id_user' => '1',
            'id_categoria' => '5',
        ]);

        Produto::create([
            'nome' => 'Batata Frita Rústica',
            'descricao' => 'Batata rústica frita',
            'preco' => '23',
            'imagem' => 'https://app.numerama.com.br/uploaded/26341638000180_files/produtos/619582/A438OVEN5CGQIDL4ZOQ1R5SYHJ0UUFZXBZRPDTBGFZMUXZJCOOYVEG48UZGSBGPJX47IIW.jpeg',
            'id_user' => '1',
            'id_categoria' => '5',
        ]);

        Produto::create([
            'nome' => 'Batata Frita',
            'descricao' => 'Batata frita',
            'preco' => '18',
            'imagem' => 'https://thumb-cdn.soluall.net/prod/shp_products/sp1280fw/5db0a140-3ae8-40b3-925f-6b22ac1e07be/5db0a140-7608-47b6-82fa-6b22ac1e07be.jpg',
            'id_user' => '1',
            'id_categoria' => '5',
        ]);
    }
}
