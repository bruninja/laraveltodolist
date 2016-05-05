@extends('layout.principal')
@section('conteudo')
  <h1>Detalhes da tarefa</h1>
    <ul>
      <li><b>Tafera:</b> {{ $p->tarefa }}</li>
      <li><b>Descrição:</b> {{ $p->descricao }}</li>
      <li><b>Status:</b> {{ $p->status }}</li>
    </ul>
    <a class="btn btn-primary" href="">
      <span class="glyphicon glyphicon-arrow-left col-md-2"></span>
    </a>
  @stop
