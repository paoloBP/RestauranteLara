@extends('adminlte::page')

@section('content')

    <h1 align=center style="font-weight: bold">Editando Categoria: {{$categoria->nome}}</h1>
    </br>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=> ["categorias.update", 'id'=>$categoria->id], 'method'=>'put']) !!}

    <div class="form-group" >
        {!! Form::label('nome', 'Nome:' ) !!}
        {!! Form::text('nome', $categoria->nome, ['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group" >
        {!! Form::submit('Editar', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        <a href="{{ url('categorias') }}" class="btn btn-info">Cancelar</a>
    </div>

    {!! Form::close() !!}
@stop
