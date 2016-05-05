<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tarefa <?=$p->tarefa ?></title>
    <link rel="stylesheet" href="{{url('')}}/assets/css/bootstrap.min.css" media="screen"charset="utf-8">
  </head>
  <body>
    <div class="container">
      <h1>Detalhes da tarefa</h1>
      <ul>
        <li><b>Tafera:</b> <?=$p->tarefa ?></li>
        <li><b>Descrição:</b> <?=$p->descricao ?></li>
        <li><b>Status:</b> <?=$p->status ?></li>
      </ul>
      <a class="btn btn-primary" href="">
        <span class="glyphicon glyphicon-arrow-left col-md-2"></span>
      </a>
    </div>
  </body>
</html>
