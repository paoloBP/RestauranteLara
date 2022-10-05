@extends('adminlte::page')

@section('content')
    <h1 align=center style="font-weight: bold">Listagem de Produtos</h1></br>

    <div class="form-group">
        <a href="{{ url('produtos/create') }}" class="btn btn-info">Adicionar</a>
    </div>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Descrição</th>
        <th>Estoque</th>
        <th>Imagem</th>
        <th>ID Usuario</th>
        <th>ID Categoria</th>

        </thead>
        <tbody>
        @foreach($produtos as $produto)
            <tr>
                <td>{{ $produto->id}}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->descricao }}</td>
                <td>{{ $produto->preco }}</td>
                <td>{{ $produto->estoque }}</td>
                <td><img src="{{$produto->imagem}}"width="61"></td>
                <td>{{ $produto->id_user }}</td>
                <td>{{ $produto->id_categoria}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>


@stop
