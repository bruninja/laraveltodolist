<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;

use estoque\Http\Requests;

use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function lista(){
      $produtos = DB::select('select * from produtos');

      return view('listagem')->with('produtos', $produtos);
    }
}
