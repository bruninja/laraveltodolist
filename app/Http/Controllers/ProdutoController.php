<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;

class ProdutoController extends Controller
{
    public function lista(){
      $produtos = Produto::all();

      return view('tarefas.listagem')->with('produtos', $produtos);
    }

    public function listaJson(){
      $produtos = Produto::all;
      return response()->json($produtos);
    }

    public function mostra($id){
      $resposta = Produto::find($id);
      if (empty($resposta)) {
        return "Esta tarefa não existe";
      }
      return view('tarefas.detalhes')->with('p',$resposta);
    }

    public function novo(){
      return view('tarefas.formularios');
    }

    public function adiciona(){
      // pegar dados do formulário
      // salvar no banco de dados
      Produto::create(Request::all());

      // retornar alguma view
      return redirect()
        ->action('ProdutoController@lista')
        ->withInput(Request::only('tarefa'));
    }

    public function remove($id){
      $tarefa = Produto::find($id);
      $tarefa->delete();
      return redirect()->action('ProdutoController@lista');
    }



}
