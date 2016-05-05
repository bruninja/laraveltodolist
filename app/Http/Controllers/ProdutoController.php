<?php

namespace estoque\Http\Controllers;

use Request;

use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function lista(){
      $produtos = DB::select('select * from produtos');

      return view('tarefas.listagem')->with('produtos', $produtos);
    }

    public function mostra($id){
      // $id = Request::route('id');
      $resposta = DB::select('SELECT * FROM produtos WHERE id = ?', [$id]);
      if (empty($resposta)) {
        return "Esta tarefa não existe";
      }
      return view('tarefas.detalhes')->with('p',$resposta[0]);
    }

    public function novo(){
      return view('tarefas.formularios');
    }

    public function adiciona(){
      // pegar dados do formulário
      $tarefa = Request::input('tarefa');
      $descricao = Request::input('descricao');
      $status = Request::input('status');

      // salvar no banco de dados
      DB::insert('INSERT INTO produtos(tarefa,descricao,status) VALUES (?,?,?)', array($tarefa, $descricao, $status));

      // retornar alguma view
      return view ('tarefas.adicionado');
    }
}
