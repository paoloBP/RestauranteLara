@extends('adminlte::page')

@section('content')
    <h1 align=center style="font-weight: bold">Listagem de Usuários</h1></br>

    <div class="form-group">
        <a href="{{ url('users/create') }}"  class="btn btn-info">Adicionar</a>
    </div>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id}}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach


        </tbody>
    </table>
@stop
