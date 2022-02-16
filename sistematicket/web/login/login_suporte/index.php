<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x20" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <title>Sistema de Ticket</title>
  </head>
  <body id="LoginForm" class="login">
    <div class="container mt-5">
      <div class="login-form">
        <div class="main-div">
          <div class="panel">
            <h2>Acesso Restrito</h2>
            <p>Por favor, entre com seu e-mail e senha</p>
          </div>
          <form id="Login" action="login.php" method="POST">
            <div class="mb-3">
              <input type="email" name="email" class="form-control" placeholder="E-mail">
            </div>
            <div class="mb-3">
              <input type="password" name="senha" class="form-control" placeholder="Senha">
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </form>
          <div class="row">
            <div class="col-12">
              <p><a href="esqueci_senha.html">Esqueceu sua senha?</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>   
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
