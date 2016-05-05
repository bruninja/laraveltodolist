<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listagem</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" media="screen"charset="utf-8">
  </head>
  <body>
    <div class="container">
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
        <?php foreach ($produtos as $p): ?>
        <tr>
          <td><?=$p->tarefa ?></td>
          <td><?=$p->descricao ?></td>
          <td><?=$p->status ?></td>
          <td class="text-center">
              <a class="btn btn-primary" href="/produtos/mostra/<?=$p->id ?>">
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
      <?php endforeach ?>
      </table>
    </div>
  </body>
</html>
