@extends('site.layout')
@section('title', 'Essa é a página Home')
@section('conteudo')



    <div className="border border-dark" id="div-center" >
        <h1 align=center>Listagem de Produtos</h1>

    </div>


<div class="row container" >
@foreach($produtos as $produto)



    <div class="col s12 m4">
        <div class="card">


            <table responsive-table>
                <thead>
                <tr>
                    <th>Imagem</th>
                    <th></th>
                    <th>Nome</th>
                    <th></th>
                    <th>Descrição</th>
                    <th></th>
                    <th>Preço</th>
                    <th></th>
                    <th>Estoque</th>
                    <th></th>


                </tr>
                </thead>

                <tbody>
                <tr>

                    <th><img src="{{$produto->imagem}}"width="230"></th>
                    <th></th>
                    <th><span class="card-title">{{ $produto->nome }}</span></th>
                    <th></th>
                    <th><p>{{$produto->descricao}}</p></th>
                    <th></th>
                    <th><p>Preço = R$ {{$produto->preco}}</p></th>
                    <th></th>
                    <th><p>{{$produto->estoque}}</p></th>



                </tr>
                </tbody>
            </table>



        </div>
    </div>
    @endforeach



</div>











@endsection
