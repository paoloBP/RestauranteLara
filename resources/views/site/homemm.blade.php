@extends('site.layout')
@section('title', 'Essa é a página Home')
@section('conteudo')


    <div className="border border-dark" id="div-center" >
        <h1 align=center>Listagem de Categorias</h1>

    </div>

    <div class="row container" >

        @foreach($categorias as $categoria)
            <div class="col s12 m4">
                <div class="card">

                    <table responsive-table>
                        <thead>
                        <tr>

                            <th ><span class="card-title" >{{ $categoria->nome }}</span></th>
                        </tr>
                        </thead>
                    </table>





                </div>
            </div>
        @endforeach


    </div>
