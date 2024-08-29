<html lang="pt-BR">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
      .navbar-custom {
        background-color: #068ed0;
        padding-left: 60px;
      }
      .navbar-custom .navbar-brand {
        color: #fff;
        display: flex;
        align-items: center;
      }
      .navbar-custom .navbar-brand img {
        height: 40px;
        margin-right: 10px;
      }
      .navbar-custom .nav-link {
        color: #fff;
      }
      .navbar-custom .nav-link:hover {
        color: #ddd;
      }
      .footer {
        background-color: #068ed0;
        color: #fff;
        padding: 10px 0;
        position: fixed;
        bottom: 0;
        width: 100%;
      }
      .footer .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      .footer .left, .footer .right {
        font-size: 0.8rem; 
      }
      .footer .center {
        display: flex;
        align-items: center;
        font-size: 0.8rem; 
      }
      .footer img {
        height: 20px;
        margin-left: 290px;
        margin-top: -35;
      }
      }
    </style>
    <title>Cadastro</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
      <a class="navbar-brand" href="#">
        <img src="logo_alphacode.png" alt="Logo"> Cadastro
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=novo">Novo Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=listar">Lista de Contatos</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col mt-5">
          <?php
            include("config.php");
            switch(@$_REQUEST["page"]){
              case "novo":
                include("novo-usuario.php");
              break;
              case "listar":
                include("usuarios.php");
              break;
              case "salvar":
                include('salvar-contatos.php');
              break;
              case "editar":
                include('editar-contato.php');
              break;
              default:
                print "<h1>Olá recrutador, espero que goste!</h1>";
      }
    ?>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="container">
        <div class="left">
          <p>Termos | Políticas</p>
        </div>
      <div>
        <p>&copy; © Copyright 2022 | Desenvolvido por</p>
        <img src="rodape.png" alt="rodape Logo">
      </div>
      <div class="right">
          <p>©Alphacode IT Solutions 2022</p>
        </div>
      </div>
    </footer>

    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>