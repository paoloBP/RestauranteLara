@extends('adminlte::page')

@section('content')

        <h1 align=center style="font-weight: bold">Nova Categoria</h1>
        </br>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif


        {!! Form::open(['route'=>'categorias.store']) !!}

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
