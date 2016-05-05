  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Lista de Tarefas</title>
      <link rel="stylesheet" href="/assets/css/bootstrap.min.css" media="screen"charset="utf-8">
      <link rel="stylesheet" href="/assets/css/custom.css" media="screen" title="no title" charset="utf-8">
    </head>
    <body>
      <div class="container">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Todo List 1.0</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/tarefas">Tarefas</a></li>
              <li><a href="/tarefas/novo">Adicionar</a></li>
            </ul>
          </div>
        </nav>

        @yield('conteudo')

        <footer class="footer">
          <p>© ninja</p>
        </footer>

      </div>
    </body>
  </html>
