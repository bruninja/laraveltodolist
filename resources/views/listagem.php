<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listagem</title>
  </head>
  <body>
    <h1>Listagem de produtos</h1>
    <table>
      <?php foreach ($produtos as $p): ?>
      <tr>
        <td><?=$p->nome ?></td>
        <td><?=$p->valor ?></td>
        <td><?=$p->descricao ?></td>
        <td><?=$p->quantidade ?></td>
      </tr>
    <?php endforeach ?>
    </table>
  </body>
</html>
