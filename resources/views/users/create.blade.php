@extends('adminlte::page')

@section('content')
    <h3>Nova Cliente</h3>

    {!! Form::open(['url'=>'users/store']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Nome:') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Senha:') !!}
        {!! Form::text('password', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Criar Cliente', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}
@stop
