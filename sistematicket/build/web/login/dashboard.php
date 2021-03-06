<?php
  
  include('protect.php');
  
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x20" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <title>Sistema de Ticket</title>
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark" style="height: 100px;">
        <div class="container-fluid">
          <a class="navbar-brand" href="http://127.0.0.1:5500/tickectsasw/index.html">
            <img src="logosasw.png" alt="" width="100" height="31" class="d-inline-block align-text-top">
            Suporte do cliente
          </a>
          <li class="nav-item">
          <a class="nav-link active" style="color: white; height: 1%; margin-bottom: 10%;">
            <div id="data-hora"></div>
            <script defer>
                const zeroFill = n => {
                    return ('0' + n).slice(-2);
                }

                const interval = setInterval(() => {
                    const now = new Date();

                    const dataHora = zeroFill(now.getUTCDate()) + '/' + zeroFill((now.getMonth() + 1)) + '/' + 
                    now.getFullYear() + ' ' + zeroFill(now.getHours()) + ':' + zeroFill(now.getMinutes()) + ':' + zeroFill(now.getSeconds());

                    document.getElementById('data-hora').innerHTML = dataHora;
                }, 1000);
                
            </script>   
            </a>
            </li>
      </div>
    </nav>

    <h2>Suporte por Ticket</h2>

    <p>Solicite um suporte t??cnico atrav??s deste canal.</p>

    <div class="botao">
      <button onclick="location.href='cad.ticket.html'" class="btn btn-success">Novo suporte</button>
    </div>

    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">#N??</th>
          <th scope="col">M??dulo</th>
          <th scope="col">Data e Hora</th>
          <th scope="col">Status</th>
          <th scope="col">Assunto</th>
        </tr>
      </thead>
      <tbody>
        <tr onclick="document.location = 'ticket.html';">
          <th scope="row">1</th>
          <td>Caixa Forte</td>
          <td>11/01/22  10:03</td>
          <th class="pendente">Pendente</th>
          <td>Erro no cadastro de cliente</td>
        </tr>
        <tr onclick="document.location = 'ticketcon.html';">
          <th scope="row">2</th>
          <td>Comercial</td>
          <td>21/12/2021 15:35</td>
          <th class="concluido">Conclu??do</th>
          <td>N??o baixa a atualiza????o</td>
        </tr>
        <tr onclick="document.location = 'ticketand.html';">
          <th scope="row">3</th>
          <td>Faturamento</td>
          <td>06/01/2022 10:45</td>
          <th class="andamento">Andamento</th>
          <td>N??o consigo acessar o satmob</td>
        </tr>
       
      </tbody>
    </table>

    <div style="text-align: center;">
      <button type="button" class="btn btn-dark" style="margin-top: 3%; width: 5%;" 
      data-bs-toggle="modal" data-bs-target="#exampleModal">
        Sair</button>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Saindo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Tem certeza que deseja sair?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">N??o</button>
              <button type="button" class="btn btn-secondary" onclick="location.href='index.php'">
                Sim</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
