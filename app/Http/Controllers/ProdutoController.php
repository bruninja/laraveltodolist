<?php

namespace estoque\Http\Controllers;

use Request;

use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function lista(){
      $produtos = DB::select('select * from produtos');

      return view('listagem')->with('produtos', $produtos);
    }

    public function mostra($id){
      // $id = Request::route('id');
      $resposta = DB::select('select * from produtos where id = ?', [$id]);
      if (empty($resposta)) {
        return "Esta tarefa não existe";
      }
      return view('detalhes')->with('p',$resposta[0]);
    }

    public function deletar(){

    }

    public function atualizar(){

    }
}
