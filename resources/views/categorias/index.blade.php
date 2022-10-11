@extends('adminlte::page')

@section('content')
    <h1 align=center style="font-weight: bold">Listagem de Categorias</h1></br>

    <div class="form-group">
        <a href="{{ route('categorias.create') }}" class="btn btn-info">Criar</a>


    </div>

    <table class="table table-stripe table-bordered table-hover">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </thead>
        <tbody>
        @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria->id}}</td>
                <td>{{ $categoria->nome }}</td>

                <td>
                    <a href="{{ route('categorias.edit', ['id'=>$categoria->id]) }}" class="btn btn-success">Editar</a>
                    <a href="{{ route('categorias.destroy', ['id'=>$categoria->id]) }}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>

        @endforeach
        </tbody>

    </table>

@stop

