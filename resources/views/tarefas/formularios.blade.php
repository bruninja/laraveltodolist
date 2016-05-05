@extends('layout.principal')

@section('conteudo')

<h1>Novo produto</h1>

<form role="form" action="/tarefas/adiciona">
  <div class="form-group">
    <label for="tarefa">Tarefa:</label>
    <input type="text" class="form-control" name="tarefa">
  </div>
  <div class="form-group">
    <label for="descricao">Descrição:</label>
    <input type="text" class="form-control" name="descricao">
  </div>
  <div class="form-group">
    <label for="">Status</label>
    <select class="form-control" name="status">
      <option value="Iniciado">Iniciado</option>
      <option value="Andamento">Em Andamento</option>
      <option value="Concluído">Concluído</option>
    </select>
  </div>
  <br>
  <button type="submit" class="btn btn-primary btn-block">Adicionar</button>
</form>

@stop
