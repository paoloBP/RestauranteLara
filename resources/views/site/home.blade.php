@extends('site.layout')
@section('title', 'Essa é a página Home')
@section('conteudo')




<div class="row container" >
@foreach($produtos as $produto)

    <div class="col s12 m4">
        <div class="card">
            <img src="{{$produto->imagem}}">
            <span class="card-title">{{ $produto->nome }}</span>
            <p>{{$produto->descricao}}</p>
        </div>
    </div>
    @endforeach


</div>











@endsection
