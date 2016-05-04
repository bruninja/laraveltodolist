<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use estoque\Produto;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call('ProdutoTableSeeder');
    }
}
class ProdutoTableSeeder extends Seeder
{
  public function run()
  {
    // $produto1 = new Produto();
    //
    // $produto1->nome = 'Geladeira';
    // $produto1->quantidade = 2;
    // $produto1->valor = 5900.0;
    // $produto1->descricao = "Side by Side com gelo na porta";
    //
    // $produto1->save();

    DB::insert('insert into produtos
    (nome, quantidade, valor, descricao)
    values (?,?,?,?)',
    array('Geladeira', 2, 5900.0,
    'Side by Side com gelo na porta'));

    \DB::insert('insert into produtos
    (nome, quantidade, valor, descricao)
    values (?,?,?,?)',
    array('Fogão', 5, 950.00,
    'Painel automático e forno elérico'));

    \DB::insert('insert into produtos
    (nome, quantidade, valor, descricao)
    values (?,?,?,?)',
    array('Microondas', 1, 1520.00,
    'Manda SMS qual termina de esquentar'));
  }
}
