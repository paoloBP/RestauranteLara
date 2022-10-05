@extends('adminlte::page')

@section('content')
    <h3>Novo Produto</h3>

    {!! Form::open(['url'=>'produtos/store']) !!}

    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('descricao', 'Descrição:') !!}
        {!! Form::text('descricao', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('preco', 'Preço:') !!}
        {!! Form::number('preco', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('estoque', 'Estoque:') !!}
        {!! Form::number('estoque', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('imagem', 'Imagem:') !!}
        {!! Form::text('imagem', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('id_categoria', 'Id Categoria:') !!}
        {!! Form::text('id_categoria', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('id_user', 'Id User:') !!}
        {!! Form::text('id_user', null, ['class' => 'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Criar Produtos', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}


@stop
