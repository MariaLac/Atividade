@extends('layout')
@section('cabecalho')
    <p class="text-center">
        Livraria
    </p>
@endsection
@section('conteudo')
<h1>
    Listagem dos livros
</h1>

<table class='table table-bordered'>
<thead>
    <th scope='col'>#</th>
    <th scope='col'>Titulo</th>
    <th scope='col'>Autor</th>
    <th scope='col'>Paginas</th>
    <th scope='col'></th>
</thead>
</tr>
    @foreach($livros as $livro)
        <tr>
            <th scope='col'>{{$livro->id}}</th>
            <th scope='col'>{{$livro->titulo}}</th>
            <th scope='col'>{{$livro->autor}}</th>
            <th scope='col'>{{$livro->paginas}}</th>
            <th><a href="/editar/{{$livro->id}}">Atualizar</a> <a href="/deletar/{{$livro->id}}">Deletar</a></th>
        </tr>
    @endforeach
</table>
@endsection
@section('rodape')
    <p class="text-center pt-2">
        Desenvolvido pela equipe Corvinal!
    </p>
@endsection