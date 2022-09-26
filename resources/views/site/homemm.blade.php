@extends('site.layout')
@section('title', 'Essa é a página Home')
@section('conteudo')




    <div class="row container" >

        @foreach($categorias as $categoria)

            <div class="col s12 m4">
                <div class="card">
                    <span class="card-title">{{ $categoria->nome }}</span>
                </div>
            </div>
        @endforeach


    </div>
