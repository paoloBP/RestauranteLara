@extends('adminlte::page')

@section('content')
    <h1 align=center style="font-weight: bold">Listagem de Usuários</h1></br>

    <div class="form-group">
        <a href="{{ route('users.create') }}" class="btn btn-info">Criar</a>
    </div>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id}}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>

                <td>
                    <a href="{{ route('users.edit', ['id'=>$user->id]) }}" class="btn btn-success">Editar</a>
                    <a href="{{ route('users.destroy', ['id'=>$user->id]) }}" class="btn btn-danger">Excluir</a>
                </td>

            </tr>
        @endforeach


        </tbody>
    </table>
@stop

@section('table-delete')
    "users"
@endsection
