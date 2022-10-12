@extends('adminlte::page')

@section('content')
    <h1 align=center style="font-weight: bold">Novo Produto</h1>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

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
        {!! Form::submit('Criar', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        <a href="{{ url('produtos') }}"class="btn btn-info">Cancelar</a>
    </div>

    {!! Form::close() !!}

@stop
