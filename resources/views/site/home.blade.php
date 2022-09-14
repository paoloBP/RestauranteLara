@extends('site.layout')
@section('title', 'Essa é a página Home')
@section('conteudo')

    <div class="row container">

        @foreach($produtos as $produto)
        <div class="coll s12 m3">
            <div class="card">
                <div class="card-image">
                   <img src="{{$produto->imagem}}">
                        <a class="btn-floating halfway-fab=eddect waves-light red"><i class="material-icons">

                </div>
                <div class="card-content">
                <span class="card-title">{{$produto->nome}}</span>
                <p>{{ str::limit($produto->descricao)}}/p>
            <div>
        </div>
    </div>











@endsection
