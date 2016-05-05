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
    (tarefa, descricao, status)
    values (?,?,?)',
    array('Estudar Laravel', 'Estudar laravel até sacar fazer um crud', 'Em Andamento'));

    DB::insert('insert into produtos
    (tarefa, descricao, status)
    values (?,?,?)',
    array('Estudar Ionic', 'Estudar Ionic e comunicação com Apis', 'Em Andamento'));

    DB::insert('insert into produtos
    (tarefa, descricao, status)
    values (?,?,?)',
    array('Criar crud com Laravel', 'Implementar aplicação com laravel utilizando as opções de CRUD básicas', 'Concluído'));

    DB::insert('insert into produtos
    (tarefa, descricao, status)
    values (?,?,?)',
    array('Sass', 'Implementar aplicação com laravel utilizando as opções de CRUD básicas', 'Em Andamento'));

    DB::insert('insert into produtos
    (tarefa, descricao, status)
    values (?,?,?)',
    array('Jogar Bola', 'Jogar Futebol e fazer Gol', 'Concluído'));

    DB::insert('insert into produtos
    (tarefa, descricao, status)
    values (?,?,?)',
    array('Outra Tarefa', 'Implementar aplicação com laravel utilizando as opções de CRUD básicas', 'Concluído'));
  }
}
