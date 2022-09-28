@extends('adminlte::page')

@section('content')
    <h1 align=center>Listagem de Categorias</h1>
    <table class="table table-stripe table-bordered table-hover">
            <thead>
                <th>ID</th>
                <th>Nome</th>
            </thead>
        <tbody>
        @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria->id}}</td>
                <td>{{ $categoria->nome }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop
