@extends('adminlte::page')

@section('content')
    <h1 align=center style="font-weight: bold">Listagem de Produtos</h1></br>

    <div class="form-group">
        <a href="{{ route('produtos.create') }}" class="btn btn-info">Criar</a>
    </div>

    <table class="table table-stripe table-bordered table-hover">
        <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Imagem</th>
        <th>ID Usuario</th>
        <th>Categoria</th>
        <th>Ações</th>

        </thead>
        <tbody>
        @foreach($produtos as $produto)
            <tr>
                <td>{{ $produto->id}}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->descricao }}</td>
                <td>{{ $produto->preco }}</td>
                <td><img src="{{$produto->imagem}}"width="61"></td>
                <td>{{ $produto->id_user }}</td>
                <td>{{ isset($produto->categoria->nome)?$produto->categoria->nome: "Categoria não informada" }}</td>


                <td>
                    <a href="{{ route('produtos.edit', ['id'=>$produto->id]) }}" class="btn btn-success">Editar</a>
                    <a href="{{ route('produtos.destroy', ['id'=>$produto->id]) }}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop

@section('table-delete')
    "produtos"
@endsection
