@extends('layout')
@section('cabecalho')
    <p class="text-center">
        Livraria
    </p>
@endsection
@section('conteudo')
    <div class="row">
        <div class="col">
            <form action="/atualizar/{{$livros->id}}" method="get">
                <label for="" class="label-control" name="titulo">
                    Titulo
                </label>
                <input type="text" class="form-control" name="titulo" value="{{$livros->titulo}}">
                <label for="" class="label-control" name="autor">
                    Autor
                </label>
                <input type="text" class="form-control" name="autor" value="{{$livros->autor}}">
                <label for="" class="label-control" name="paginas">
                    Paginas
                </label>
                <input type="integer" class="form-control" name="paginas" value="{{$livros->paginas}}">
                <button class="btn btn-light">
                    Enviar
                </button>
            </form>
        </div>
    </div>
@endsection
@section('rodape')
    <p class="text-center pt-2">
        Desenvolvido pela equipe Corvinal!
    </p>
@endsection