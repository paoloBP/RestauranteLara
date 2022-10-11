@extends('adminlte::page')

@section('content')
    <h1 align=center style="font-weight: bold">Novo Produto: {{$produto->nome}}</h1>

    {!! Form::open(['route'=> ["produtos.update", 'id'=>$produto->id], 'method'=>'put']) !!}

    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', $produto->nome, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('descricao', 'Descrição:') !!}
        {!! Form::text('descricao', $produto->descricao, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('preco', 'Preço:') !!}
        {!! Form::number('preco', $produto->preco, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('estoque', 'Estoque:') !!}
        {!! Form::number('estoque', $produto->estoque, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('imagem', 'Imagem:') !!}
        {!! Form::text('imagem', $produto->imagem, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('id_categoria', 'Id Categoria:') !!}
        {!! Form::text('id_categoria', $produto->id_categoria, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('id_user', 'Id User:') !!}
        {!! Form::text('id_user', $produto->id_user, ['class' => 'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Criar', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        <a href="{{ url('produtos') }}"class="btn btn-info">Cancelar</a>
    </div>

    {!! Form::close() !!}

@stop
