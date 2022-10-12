@extends('adminlte::page')

@section('content')
    <h1 align=center style="font-weight: bold">Novo Usuário: {{$user->nome}}</h1>
    </br>

    {!! Form::open(['route'=> ["users.update", 'id'=>$user->id], 'method'=>'put']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Nome:') !!}
        {!! Form::text('name', $user->name, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', $user->email, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Senha:') !!}
        {!! Form::text('password', $user->password, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        <a href="{{ url('users') }}"class="btn btn-info">Cancelar</a>
    </div>

    {!! Form::close() !!}

@stop
