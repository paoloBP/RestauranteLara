@extends('adminlte::page')

@section('content')

        <h1 align=center style="font-weight: bold">Nova Categoria</h1>
        </br>


        {!! Form::open(['url'=>'categorias/store']) !!}

        <div class="form-group" >
            {!! Form::label('nome', 'Nome:' ) !!}
            {!! Form::text('nome', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group" >
            {!! Form::submit('Criar', ['class'=>'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
            <a href="{{ url('categorias') }}" class="btn btn-info">Cancelar</a>
        </div>

    {!! Form::close() !!}
@stop
