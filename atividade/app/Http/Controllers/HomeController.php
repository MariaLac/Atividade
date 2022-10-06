<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Livro as Livro;

class HomeController extends Controller
{
    public function salvar(Request $request){
        //dd($request);
        $livros = new Livro();
        $livros->titulo = $request->titulo;
        $livros->autor= $request->autor;
        $livros->paginas = $request->paginas;
        $livros->save();
        return back();
    }

    public function mostrar(){
        $livros = Livro::All();
        return view('listagem', ['livros' => $livros]);
    }

    public function deletar($id){
        Livro::findorfail($id) ->delete();
        return redirect('/listagem');
    }

    public function editar($id){
        $livros = Livro::findorfail($id);
        return view('editar', ['livros' => $livros]);
    }

    public function atualizar(Request $request, $id){
        Livro::findorfail($id) ->update($request->all());
        return redirect('/listagem');
    }
}