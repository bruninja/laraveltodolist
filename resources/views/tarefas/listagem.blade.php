@extends('layout.principal')
@section('conteudo')
  @if (empty($produtos))
    <div class="alert alert-danger">
      <p>Nenhuma Tarefa Registrada!</p>
    </div>
  @else
    <h1>Lista de Tarefas</h1>
    <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <td><b>Tarefa</b></td>
          <td><b>Descrição</b></td>
          <td><b>Status</b></td>
          <td class="text-center"><b>Opções</b></td>
        </tr>
      </thead>
    @foreach ($produtos as $p)
      <tr class="{{$p->status == 'Concluído' ? 'success' : ''}}">
        <td>{{$p->tarefa }}</td>
        <td>{{$p->descricao or 'nenhuma descrição informada'}} </td>
        <td>{{$p->status }}</td>
        <td class="text-center">
            <a class="btn btn-primary" href="/tarefas/mostra/{{ $p->id }}">
              <span class="glyphicon glyphicon-search col-md-2"></span>
            </a>
            <a class="btn btn-success" href="">
              <span class="glyphicon glyphicon-refresh col-md-2"></span>
            </a>
            <a class="btn btn-danger" href="">
              <span class="glyphicon glyphicon-remove col-md-2"></span>
            </a>
        </td>
      </tr>
    @endforeach
    </table>
  @endif
  <h4>
    <span class="label label-danger pull right">
      Alguma informação aqui.
    </span>
  </h4>
@stop
